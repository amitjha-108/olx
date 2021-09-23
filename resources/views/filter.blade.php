@extends('base')
@section('content')

<div class="container mt-4">
    <div class="row">
       
            <div class="col-lg-12">
                <div class="row">
                    @foreach ($pro as $item)
                    <div class="col-lg-2">
                        <div class="card mb-2">
                            <img src="{{asset('products/'.$item->seller_image)}}" alt="" class="card-img-top">
                            <div class="card-body">
                                <h4>₹{{$item->price}}</h4>
                                <h6>{{$item->pro_title}}</h6>
                                <a href="{{route('view',['itemId'=>$item->id,"catId"=>$item->category_id])}}" class="nav-link stretched-link">Know More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-12 mx-auto">
                        {{$pro->links()}}
                    </div>

                </div>
                
            </div>
      
    </div>
</div>

@endsection