<?php

namespace App\Livewire;

use App\Models\Advertisement;
use App\Models\TeamMember;
use Livewire\Component;

class Home extends Component
{
    public $jobs;
    public $teamMembers;

    public function mount()
    {
        $this->jobs = $this->getJobs();
        $this->teamMembers = $this->getTeamMembers();
    }

    public function render()
    {
        return view('livewire.UsersView.home', ['jobs' => $this->jobs, 'members' => $this->teamMembers]);
    }

    private function getJobs()
    {
        $ads = Advertisement::take(3)->get();

        return $ads;
    }

    private function getTeamMembers()
    {
        $members = TeamMember::take(4)->get();

        return $members;
    }
}
