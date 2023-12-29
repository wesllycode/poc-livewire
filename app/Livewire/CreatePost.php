<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CreatePost extends Component
{
    public $title = 'Post Title...';

    private $arrayNomes = ['João', 'Maria', 'Pedro'];

    public function render()
    {
        return view('livewire.create-post')->with([
            'arrayNomes' => $this->arrayNomes
        ]);
    }
}
