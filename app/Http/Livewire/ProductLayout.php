<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductLayout extends Component
{
    public $pro;
    public function render()
    {
         return view('livewire.product-layout',["pro"=>$this->pro]);
    }
}
