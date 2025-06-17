@extends('layouts.app')

@section('title', isset($product['name']) ? $product['name'] : 'Product Details')

@section('content')
    @if(isset($product))
        <div class="product-detail">
            <div class="product-detail-image">
                @if(isset($product['image']) && $product['image'])
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                @else
                    <img src="https://via.placeholder.com/400x300.png?text=No+Image" alt="No image available">
                @endif
            </div>
            <div class="product-detail-info">
                <h1>{{ $product['name'] }}</h1>
                <p class="price">${{ number_format($product['price'], 2) }}</p>
                <p>{{ $product['description'] }}</p>
                {{-- Add to cart button or other actions can go here --}}
                <a href="{{-- url('/products') --}}" class="btn-back">Back to Products</a>
            </div>
        </div>
    @else
        <h1>Product Not Found</h1>
        <p>Sorry, the product you are looking for could not be found.</p>
        <a href="{{-- url('/products') --}}" class="btn-back">Back to Products</a>
    @endif
@endsection
