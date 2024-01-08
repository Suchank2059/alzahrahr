<?php

namespace App\Livewire;

use App\Mail\ContactUsMail;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contacts extends Component
{
    public $location;

    public $primaryContact;

    public $company_email;

    public $name = '';
    public $email = '';
    public $message = '';
    public $loading = false;

    protected function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ];
    }

    public function mount()
    {
        $companyProfile = CompanyProfile::where('company_email', 'alzahranepal@gmail.com')->first();

        if ($companyProfile) {
            $this->location = $companyProfile->location;
            $this->primaryContact = $companyProfile->primary_contact;
            $this->company_email = $companyProfile->company_email;
        }
    }

    public function render()
    {
        return view('livewire.UsersView.contacts', ['location' => $this->location, 'primaryContact' => $this->primaryContact, 'company_email' => $this->email]);
    }

    public function contactUs()
    {
        $this->validate();
        $this->loading = true;
        Mail::to("apdhungana123@gmail.com")->send(new ContactUsMail($this->name, $this->email, $this->message));
        $this->loading = false;
        session()->flash('success', 'Mail sent successfully');
        return redirect(url('contacts'));
    }
}
