@extends('layouts.main')

@section('content')
    <!-- Products Start -->
    <div id="products">
        <div class="container">
            <div class="section-header">
                <h2>Get Your Products</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec viverra at massa sit amet ultricies
                </p>
            </div>
            <div class="row align-items-center">

                @foreach ($products as $product)
                    <div class="col-md-3 mt-2">
                        <div class="product-single">
                            <div class="product-img">
                                <img style="width: 80px; height: 80px" src="{{ asset('img/' . $product->image) }}"
                                    alt="Product Image">
                            </div>
                            <div class="product-content">
                                <h2>
                                    <a
                                        href="{{ route('single_product', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </h2>

                                @if ($product->sale_price != null)
                                    <h3>{{ $product->sale_price }}</h3>
                                    <h3 style="text-decoration: line-through">{{ $product->price }}</h3>
                                @else
                                    <p>Normal price</p>
                                    <h3>{{ $product->price }}</h3>
                                @endif
                                <a class="btn" href="#">Buy Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
    <!-- Products End -->
@endsection
