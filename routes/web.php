<?php

use App\Livewire\AboutUs;
use App\Livewire\Clients;
use App\Livewire\Contacts;
use App\Livewire\Home;
use App\Livewire\Services;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class);
Route::get('/about-us', AboutUs::class);
Route::get('/services', Services::class);
Route::get('/clients', Clients::class);
Route::get('/contacts', Contacts::class);
