@extends('base')

@section('content')
    @livewire('card-layout',["cat"=>$cat])




    @livewire('product-layout',["pro"=>$product])
@endsection