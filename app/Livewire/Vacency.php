<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class Vacency extends Component
{
    // public $jobs;
    // public $jobDescriptions;
    // public function mount()
    // {
    //     $this->jobs = $this->getJobs();
    // }
    public function render()
    {
        return view('livewire.vacency');
    }
    // private function getJobs()
    // {
    //     // Fetch all instances of jobs
    //     $ads = Advertisement::get();
    //     return $ads;
    // }
}
