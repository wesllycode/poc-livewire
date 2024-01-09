<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PassandoParametro extends Component
{
    public $title = 'Post Title...';

    private $arrayNomes = ['João', 'Maria', 'Pedro'];

    public function render()
    {
        return view('livewire.passando-parametro')->with([
            'arrayNomes' => $this->arrayNomes
        ]);
    }
}
