<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{

    public function render()
    {
        return view('livewire.create-post');
    }
}
