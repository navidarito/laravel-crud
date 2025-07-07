@extends('layouts.app')
@section('content')

<title>Editing Product</title>



<div class="container ">
  
        <form action="{{route('product.update', $product->id)}}" class="form" method="post">
        @csrf
        @method('PUT')

        <div class="card w-25 h-25  ">
            <div class="card-body">
                <div class="form-group">
                 <label for="name">Product Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$product->name}}">
                </div>

                <br>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Price" value="{{$product->price}}">
                </div>

                <br>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="{{$product->description}}">
                </div>

                <br>
                <input type="submit" class="btn btn-primary" value="UPDATE">
            </div>
        </div>
        

        </form>
</div>

@endsection