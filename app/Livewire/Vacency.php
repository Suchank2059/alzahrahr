<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Illuminate\View\View;
use Livewire\Component;

class Vacency extends Component
{
    public $jobs;

    public function mount(): void
    {
        $this->deleteOldAdvertisements();
        $this->jobs = $this->getJobs();
    }

    public function render(): View
    {
        return view('livewire.UsersView.vacency', [
            'jobs' => $this->jobs,
        ]);
    }

    private function deleteOldAdvertisements(): void
    {
        Advertisement::where('created_at', '<', now()->subDays(8))->delete();
    }

    private function getJobs()
    {
        return Advertisement::get();
    }
}
