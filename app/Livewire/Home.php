<?php

namespace App\Livewire;

use App\Models\Advertisement;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class Home extends Component
{
    public $jobs;
    public $clients;
    public $selectedClientId;
    public $companies;

    public function mount(): void
    {
        $this->deleteOldAdvertisements();
        $this->jobs = $this->getJobs();
        $this->clients = $this->getClients();
    }

    public function render(): View
    {
        return view('livewire.UsersView.home', [
            'jobs' => $this->jobs,
            'clients' => $this->clients,
        ]);
    }

    private function deleteOldAdvertisements(): void
    {
        Advertisement::where('created_at', '<', Carbon::now()->subDays(8))->delete();
    }

    private function getJobs(): Collection
    {
        $ads = Advertisement::take(3)->get();

        return $ads;
    }

    private function getClients(): Collection
    {
        $client = Client::get();

        return $client;
    }
}
