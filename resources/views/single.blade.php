@extends('base')

@section('content')
    <div class="contianer mt-4">
        <div class="row">
            
                
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-header">Seller Details</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">Seller Name</div>
                                        <div class="col">{{$item->seller_name}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col">contact </div>
                                        <div class="col">{{$item->seller_contact}}</div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="card mt-4 border-0 shadow">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col">City</div>
                                        <div class="col">{{$item->city}}</div>
                                    </div>
                                    <div class="row">
                                        <div class="col">Address</div>
                                        <div class="col">{{$item->address}}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-lg-4">
                            <img src="{{asset('products/'.$item->seller_image)}}" height="400" width="50" class="card-img-top image-fluid" alt="" style="background-size:cover;">
                        </div>
                        <div class="col-lg-4">
                            <div class="card-body h4">{{$item->pro_title}}</div>
                            <div class="card-body">
                                <h5 class="">₹{{$item->price}}</h5>
                            </div>
                            <div class="my-4">
                                <div class="text-muted">{{$item->description}}</div>
                            </div>
                        </div>
    
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <h5>Related Rroducts ({{ count($pro) }})</h5>
                            <div class="row">
                                @foreach ($pro as $item)
                                <div class="col-lg-2 mt-3">
                                    
                                        <div class="card">
                                            <img src="{{asset('products/'.$item->seller_image)}}" height="200" width="50" class="card-img-top" alt="">
                                            <div class="card-body">
                                                <h4 class="card-body">₹{{$item->price}}</h4>
                                                <h6 class="">{{$item->pro_title}}</h6>
                                                <a href="{{route('view',['itemId'=>$item->id,"catId"=>$item->category_id])}}" class="nav-link stretched-link">Know mome</a>
                                            </div>
                                        </div>
                                    
                                    
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            
        </div>

        


    </div>
@endsection