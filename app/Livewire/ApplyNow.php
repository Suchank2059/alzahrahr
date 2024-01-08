<?php

namespace App\Livewire;

use App\Mail\ApplyNowMail;
use App\Models\CompanyProfile;
use Livewire\Attributes\Validate;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ApplyNow extends Component
{
    use WithFileUploads;

    public $userName = '';
    public $email = '';
    public $firstName = '';
    public $lastName = '';
    public $address = '';
    public $city = '';
    public $country = '';
    public $phoneNumber = '';
    public $aboutMe = '';
    public $loading = false;
    public $companyEmail;
    public $cvPath;
    public $photoPath;
    public $passportPath;

    #[Validate('required|max:1024')]
    public $cv;

    #[Validate('required|max:1024')]
    public $photo;

    #[Validate('required|max:1024')]
    public $passport;

    protected function rules(): array
    {
        return [
            'userName' => 'required',
            'email' => 'required|email',
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phoneNumber' => 'required',
            'aboutMe' => 'required',
        ];
    }

    public function mount()
    {
        $companyProfile = CompanyProfile::first();
        if ($companyProfile->company_email) {
            $this->companyEmail = $companyProfile->company_email;
        }
    }

    public function render(): View
    {
        return view('livewire.UsersView.apply-now');
    }

    public function applyNow()
    {
        $validated = $this->validate();
        $this->storePath();
        $this->loading = true;
        try {
            Mail::to($this->companyEmail)->send(new ApplyNowMail($validated, $this->cv, $this->photo, $this->passport));
            $this->deleteFiles();
            $this->loading = false;
            session()->flash('success', 'Mail sent successfully, We will respond you soon after reviewing your application');
        } catch (\Exception $e) {
            session()->flash('error', 'Error sending email: ' . $e->getMessage());
        }
    }

    private function storePath(): void
    {
        if ($this->cv) {
            $this->cvPath = $this->cv->storeAs('cv', $this->cv->hashName(), 'public');
        }
        if ($this->photo) {
            $this->photoPath = $this->photo->storeAs('photos', $this->photo->hashName(), 'public');
        }
        if ($this->passport) {
            $this->passportPath = $this->passport->storeAs('passports', $this->passport->hashName(), 'public');
        }
    }

    private function deleteFiles(): void
    {
        Storage::disk('public')->deleteDirectory('cv');
        Storage::disk('public')->deleteDirectory('photos');
        Storage::disk('public')->deleteDirectory('passports');
        Storage::disk('local')->deleteDirectory('livewire-temp');
    }
}
