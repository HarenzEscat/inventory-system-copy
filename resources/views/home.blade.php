@extends('layout.app')

@section('content')
<div class="card my-4">
    <form action="{{ route('saveStudents')}}" method="post">
        @csrf
        <div class="card-body">
            <div class="row">
                <div class="col mb-3">
                    <label for="p_name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="col-md-3 mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" >
                </div>
                <div class="col mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" >
                </div>
                <div class="col mb-3">
                    <label for="quantityinstock" class="form-label">Quantity Stock</label>
                    <input type="text" class="form-control" name="quantityinstock" >
                </div>
                <div class="col mb-3 d-flex justify-content-center align-items-center">
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
            </div>
        </div>
    </form>
</div>

<table class="table table-hover text-center">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity Stock</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($Students)
            @foreach ($Students as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->quantityinstock}}</td>
                    <td>
                        <a href="{{route('updateStudents', $product->id)}}"><button type="button" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button></a>
                        <a href="{{route('removeStudents', $product->id)}}"><button type="button" class="btn btn-danger"> <i class="bi bi-trash"></i></button></a>
                        
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@endsection