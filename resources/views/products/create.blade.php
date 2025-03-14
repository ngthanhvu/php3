@extends('layouts.master')

@section('content')
    <h2>Tạo sản phẩm</h2>
    <form action="/products" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter name">
        </div>
        <div class="form-group mb-3">
            <label for="price">Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
        </div>
        <div class="form-group mb-3">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Enter image">
        </div>
        <div class="form-group mb-3">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity"></label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
