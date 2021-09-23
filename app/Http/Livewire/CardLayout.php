<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CardLayout extends Component
{
    public $cat;
    public function render()
    {
        return view('livewire.card-layout',["cat"=>$this->cat]);
    }
}
