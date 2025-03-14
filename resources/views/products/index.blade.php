@extends('layouts.master')

@section('content')
    <h1>Đây là trang products</h1>
    <a href="/products/create" class="btn btn-primary mb-3 mt-3">Create</a>
    <table class="table table-striped table-bordered table-hover text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><img src="{{ $product->image }}" alt="{{ $product->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a> |
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @if (count($products) == 0)
                <tr>
                    <td colspan="6">No data</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
