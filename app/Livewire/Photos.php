<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Photo;
use Livewire\Component;
use Livewire\Attributes\On;

class Photos extends Component
{
    public $photos;
    public $eventId;
    public function mount($eventId)
    {
        $this->eventId = $eventId;
        $this->photos = Photo::where('event_id', $this->eventId)->get();
    }
    public function render()
    {
        $eventName = Event::findOrFail($this->eventId)->name;
        return view('livewire.UsersView.photos', ['photos' => $this->photos, 'event' => $eventName]);
    }
}
