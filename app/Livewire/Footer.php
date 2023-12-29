<?php

namespace App\Livewire;

use App\Models\CompanyProfile;
use Livewire\Component;
use GuzzleHttp\Client;

class Footer extends Component
{
    public $location;
    public $primaryContact;
    public $secondaryContact;
    public $email;

    public function mount()
    {
        $companyProfile = CompanyProfile::where('company_email', 'alzahranepal@gmail.com')->first();

        if ($companyProfile) {
            $this->location = $companyProfile->location;
            $this->primaryContact = $companyProfile->primary_contact;
            $this->secondaryContact = $companyProfile->secondary_contact;
            $this->email = $companyProfile->company_email;
        }
    }
    public function render()
    {
        return view('livewire.footer', ['location' => $this->location, 'primaryContact' => $this->primaryContact, 'secondaryContact' => $this->secondaryContact, 'email' => $this->email]);
    }
}
