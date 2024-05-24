@extends('themes.theme1.layouts.app')
@section('content')
<!-- single brand -->
<section class="category-page single_brand">
    <!-- container -->
    <div class="pixel-container">
        <!-- row -->
        <div class="wrap">
            <!-- header -->
            <section class="s-block">
                <!-- brand data -->
                <div class="brand_data">
                    <!-- img -->
                    <div class="brand_img">
                        <img class="brand-item" src="{{storage_asset($brand->image)}}" alt="{{ $brand->name }}">
                    </div>
                    <!-- ./img -->
                    <!-- title -->
                    <div class="brand_title">
                        <h1>{{ $brand->name }}</h1>
                        {{-- <p>For a bolder and more attractive look</p> --}}
                    </div>
                    <!-- ./title -->
                </div>
                <!-- ./brand data -->
            </section>
            <!-- ./header -->

            <!-- header -->
            <section class="s-block">
                <!-- brand product items -->
                <div class="brand_products">


                    @forelse ($brand->products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="item">
                            <!-- tags -->
                            <div class="item-tags">
                                {{-- <span>most popular</span> --}}
                            </div>
                            <!-- ./tags -->

                            <!-- img -->
                            <div class="img">
                                <a href="{{ route('product.show', $product->id) }}">
                                    <img class="w-full object-contain" src="{{ $product->thumbnail }}" alt="{{ $product->name }}">
                                </a>
                            </div>
                            <!-- img -->

                            <!-- data -->
                            <div class="item-data">
                                <!-- price -->
                                <div class="item-price">
                                    <h4 class="before-dis">
                                        <strong>{{ number_format($product->variants->first()->price, 2) }}</strong>
                                        <span>LYD</span>
                                    </h4>
                                    @if($product->discount_price)
                                        <h4 class="after-dis">
                                            <strong>{{ number_format($product->discount_price, 2) }}</strong>
                                            <span>LYD</span>
                                        </h4>
                                    @endif
                                    <div class="add-favourite">
                                        <button class="icon-fav">
                                            <i class="sicon-heart"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- ./price -->

                                <!-- description -->
                                <div class="item-dec">
                                    <a href="{{ route('product.show', $product->id) }}">
                                        <span>{{ $product->description }}</span>
                                    </a>
                                </div>
                                <!-- ./description -->

                                <!-- button cart -->
                                <button class="tocart add-to-cart button--submit" data-title="Add to Cart" data-product-id="{{ $product->id }}">
                                    <span class="button-title">Add to Cart</span>
                                    <i class="sicon-shopping button-icon icon-tocart" data-icon="tocart"></i>
                                    <span class="button-icon icon-wait" data-icon="tocart" style="display: none;">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19,8L15,12H18A6,6 0 0,1 12,18C11,18 10.03,17.75 9.2,17.3L7.74,18.76C8.97,19.54 10.43,20 12,20A8,8 0 0,0 20,12H23M6,12A6,6 0 0,1 12,6C13,6 13.97,6.25 14.8,6.7L16.26,5.24C15.03,4.46 13.57,4 12,4A8,8 0 0,0 4,12H1L5,16L9,12"></path>
                                        </svg>
                                    </span>
                                    <span class="button-icon icon-success" style="display: none;" data-icon="tocart">
                                        <svg width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"></path>
                                        </svg>
                                    </span>
                                </button>
                                <!-- ./button cart -->
                            </div>
                            <!-- ./data -->
                        </div>
                    </div>
                @empty
                    <p>No products found for this brand.</p>
                @endforelse

                </div>
                <!-- ./brand product items -->
            </section>
            <!-- ./header -->

        </div>
        <!-- ./row -->
    </div>
    <!-- ./container -->
</section>
<!-- ./single brand -->
@endsection
