<?php

namespace App\Livewire;

use App\Models\Advertisement;
use Livewire\Component;

class Home extends Component
{
    public $jobs;

    public function mount()
    {
            $this->jobs = $this->getJobs();
    }

    public function render()
    {
        return view('livewire.UsersView.home', ['jobs' => $this->jobs]);
    }

    private function getJobs()
    {
        // Fetch only 3 instances of jobs
        $ads = Advertisement::take(3)->get();

        return $ads;
    }
}
