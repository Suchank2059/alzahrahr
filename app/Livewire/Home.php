<?php

namespace App\Livewire;

use App\Models\Advertisement;
use App\Models\Client;
use App\Models\Company;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Home extends Component
{
    public $jobs;
    public $clients;
    public $selectedClientId;
    public $companies;

    public function mount()
    {
        $this->jobs = $this->getJobs();
        $this->clients = $this->getClients();
    }

    public function render()
    {
        return view('livewire.UsersView.home', [
            'jobs' => $this->jobs,
            'clients' => $this->clients,
        ]);
    }

    private function getJobs()
    {
        $ads = Advertisement::take(3)->get();

        return $ads;
    }

    private function getClients()
    {
        return Client::get();
    }

    public function checkClientId($clientId)
    {
        dd($clientId);
    }
}
