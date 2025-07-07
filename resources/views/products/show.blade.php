

@extends('layouts.app')
@section('content')

<title>List of Products</title>



<div class="container">
    <div class="row">
        <form action="{{url('/products')}}" class="form-inline" method="post">
    @csrf

        <div class="input-group">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            <input type="number" class="form-control" name="price" id="price" placeholder="Price">
            <input type="text" class="form-control" name="description" id="description" placeholder="Description">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
        

</form>


<br>
<br>
<br>
<br>



<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Delete</th>
        
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <form action="{{route('product.destroy', $product->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>

                
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
</div>

@endsection