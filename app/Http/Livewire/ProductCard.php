<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCard extends Component
{
    public $pro;
    public function render()
    {
        return <<<'blade'
            <div>
              
                <div class="card mb-2">
                        <img src="{{asset('products/'.$pro->seller_image)}}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4>₹{{$pro->price}}</h4>
                        <h6>{{$pro->title}}</h6>
                        <a href="" class="nav-link stretched-link">Know More</a>
                    </div>
                </div>
           
            </div>
        blade;
    }
}
