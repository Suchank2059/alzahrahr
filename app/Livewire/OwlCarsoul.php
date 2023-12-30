<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;

class OwlCarsoul extends Component
{
    public $clientId;
    public $companies;

    public function mount()
    {
        $this->companies = $this->getCompanies();
    }
    public function render()
    {
        return view('livewire.owl-carsoul', ['companies' => $this->companies]);
    }

    public function getCompanies()
    {
        return Company::where('client_id', $this->clientId)->get();
    }
}
