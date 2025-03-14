@extends('layouts.master')

@section('content')
    <h2>Cập nhật sản phẩm</h2>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $product->title }}">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $product->description }}</textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}">
        </div>
        <div class="form-group mb-3">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
