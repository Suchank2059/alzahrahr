<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $events;

    public function render()
    {
        $this->events = Event::with('photos')->get();

        return view('livewire.UsersView.events', ['events' => $this->events]);
    }

    public function renderPhotoes($eventId)
    {
        $event = Event::findOrFail($eventId);
        return view('livewire.UsersView.photos', ['eventId' => $eventId]);
    }
}
