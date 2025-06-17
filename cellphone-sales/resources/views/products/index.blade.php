@extends('layouts.app')

@section('title', 'All Products')

@section('content')
    <h1>Our Products</h1>

    @if(isset($products) && count($products) > 0)
        <div class="product-grid">
            @foreach($products as $product)
                <div class="product-item">
                    @if(isset($product['image']) && $product['image'])
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    @else
                        <img src="https://via.placeholder.com/250x200.png?text=No+Image" alt="No image available">
                    @endif
                    <h2>{{ $product['name'] }}</h2>
                    <p class="price">${{ number_format($product['price'], 2) }}</p>
                    <a href="{{-- route('products.show', $product['id']) --}}" class="btn">View Details</a>
                </div>
            @endforeach
        </div>
    @else
        <p>No products found.</p>
    @endif
@endsection
