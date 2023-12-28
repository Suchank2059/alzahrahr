<?php

namespace App\Livewire;

use Livewire\Component;

class Carsoul extends Component
{
    public $currentSlide = 0;

    public $slides = [
        [
            'title' => 'Alzahra Human Resource Consultancy Welcomes You',
            'image' => 'image/cr3.png',
        ],
        [
            'title' => 'Over 20 Years of Experience',
            'image' => 'image/carousel1.jpg',
        ],
        [
            'title' => 'Fulfilling all your HR needs',
            'image' => 'image/carousel2.jpg',
        ],
    ];
    public function render()
    {
        return view('livewire.UsersView.carsoul');
    }
    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + count($this->slides)) % count($this->slides);
    }

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % count($this->slides);
    }
}
