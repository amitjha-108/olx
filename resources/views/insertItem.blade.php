@extends('base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                    <div class="mb-3">
                                        <label for="">Title</label>
                                        <input type="text" name="title" class="form-control" value="{{old('title')}}">
                                        @error('title')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Price</label>
                                        <input type="text" name="price" class="form-control" value="{{old('price')}}">
                                        @error('price')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Seller Name</label>
                                        <input type="text" name="seller_name" class="form-control" value="{{old('seller_name')}}">
                                        @error('seller_name')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Seller Contact</label>
                                        <input type="text" name="seller_contact" class="form-control" value="{{old('seller_contact')}}">
                                        @error('seller_contact')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Address</label>
                                        <input type="text" name="address" class="form-control" value="{{old('address')}}">
                                        @error('address')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">City</label>
                                        <input type="text" name="city" class="form-control" value="{{old('city')}}">
                                        @error('city')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Category</label>
                                        <select name="category" class="form-select">
                                            @foreach ($cat as $c)
                                                <option value="{{$c->id}}">{{$c->title}}</option>
                                            @endforeach
                                        </select>
                                            <a href="#model" class="nav-link" data-bs-toggle="modal">Create new category</a>
                                           

                                        @error('category')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    

                                    <div class="mb-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control" value="{{old('image')}}">
                                        @error('image')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10">{{old('description')}}</textarea>
                                        @error('seller_name')
                                            <p class="text-danger small">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" name="send" class="btn btn-success">
                                    </div>

                            </form>


                            <div class="modal fade" id="model">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form action="{{route('insertCat')}}" method="POST">
                                                @csrf

                                                <div class="mb-3">
                                                    <label for="">Main Category</label>
                                                    <select name="parent" id="" class="form -control">
                                                        

                                                        <option value="0">Select main category</option>
                                                        @foreach ($main as $cat)
                                                            <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="">Cat Title</label>
                                                    <input type="text" name="title" class="form-control">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    <input type="submit" class="btn btn-success">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection