@extends('themes.theme1.layouts.app')

@section('crumbs')
    <!-- breadcrumbs -->
    <section class="category-crumb">
        <!-- container-->
        <div class="pixel-container">
            <!-- row -->
            <div class="wrap">
                <!-- content -->
                <ul class="breadcrumbs">
                    <li>
                        <a href="{{route('index')}}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <span> Wish List</span>
                    </li>
                </ul>
                <!-- ./content -->
            </div>
            <!-- ./row -->
        </div>
        <!-- ./container-->
    </section>
    <!-- breadcrumbs -->
@endsection

@section('content')

    <!-- user-layout -->
    <section class="user-page-layout">
        <div class="pixel-container">
            <div class="wrap">
                <div class="user-layout">
                    @include('themes.theme1.profile.profile_aside')
                    <main>
                        <h1>Wishlist</h1>
                        <div class="whishlist_items">
                            <!-- product item -->
                            <div class="item">
                                <!-- tags -->
                                <div class="item-tags">
                                    <span>most popular</span>
                                </div>
                                <!-- ./tags -->

                                <!-- img -->
                                <div class="img">
                                    <a href="cart-empty.php">
                                        <img class="w-full object-contain" src="images/products/01.png" alt="">
                                    </a>
                                </div>
                                <!-- img -->

                                <!-- data -->
                                <div class="item-data">
                                    <!-- price -->
                                    <div class="item-price">
                                        <h4 class="before-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <h4 class="after-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <div class="add-favourite">
                                            <button class="icon-fav added">
                                                <i class="sicon-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ./price -->

                                    <!-- description -->
                                    <div class="item-dec">
                                        <a href="cart-empty.php">
                                            <span>Garden Olean - Fortifying Hair Oil with Rosemary Essential Oil, 50 ml</span>
                                        </a>
                                    </div>
                                    <!-- ./description -->

                                    <!-- button cart -->
                                    <button class="tocart add-to-cart button--submit" data-title="Add to Cart">
                                        <span class="button-title"></span>
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
                            <!-- product item -->

                            <!-- product item -->
                            <div class="item">
                                <!-- tags -->
                                <div class="item-tags">
                                    <span>most popular</span>
                                </div>
                                <!-- ./tags -->

                                <!-- img -->
                                <div class="img">
                                    <a href="cart-empty.php">
                                        <img class="w-full object-contain" src="images/products/01.png" alt="">
                                    </a>
                                </div>
                                <!-- img -->

                                <!-- data -->
                                <div class="item-data">
                                    <!-- price -->
                                    <div class="item-price">
                                        <h4 class="before-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <h4 class="after-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <div class="add-favourite">
                                            <button class="icon-fav added">
                                                <i class="sicon-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ./price -->

                                    <!-- description -->
                                    <div class="item-dec">
                                        <a href="cart-empty.php">
                                            <span>Garden Olean - Fortifying Hair Oil with Rosemary Essential Oil, 50 ml</span>
                                        </a>
                                    </div>
                                    <!-- ./description -->

                                    <!-- button cart -->
                                    <button class="tocart add-to-cart button--submit" data-title="Add to Cart">
                                        <span class="button-title"></span>
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
                            <!-- product item -->

                            <!-- product item -->
                            <div class="item">
                                <!-- tags -->
                                <div class="item-tags">
                                    <span>most popular</span>
                                </div>
                                <!-- ./tags -->

                                <!-- img -->
                                <div class="img">
                                    <a href="cart-empty.php">
                                        <img class="w-full object-contain" src="images/products/01.png" alt="">
                                    </a>
                                </div>
                                <!-- img -->

                                <!-- data -->
                                <div class="item-data">
                                    <!-- price -->
                                    <div class="item-price">
                                        <h4 class="before-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <h4 class="after-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <div class="add-favourite">
                                            <button class="icon-fav added">
                                                <i class="sicon-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ./price -->

                                    <!-- description -->
                                    <div class="item-dec">
                                        <a href="cart-empty.php">
                                            <span>Garden Olean - Fortifying Hair Oil with Rosemary Essential Oil, 50 ml</span>
                                        </a>
                                    </div>
                                    <!-- ./description -->

                                    <!-- button cart -->
                                    <button class="tocart add-to-cart button--submit" data-title="Add to Cart">
                                        <span class="button-title"></span>
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
                            <!-- product item -->

                            <!-- product item -->
                            <div class="item">
                                <!-- tags -->
                                <div class="item-tags">
                                    <span>most popular</span>
                                </div>
                                <!-- ./tags -->

                                <!-- img -->
                                <div class="img">
                                    <a href="cart-empty.php">
                                        <img class="w-full object-contain" src="images/products/01.png" alt="">
                                    </a>
                                </div>
                                <!-- img -->

                                <!-- data -->
                                <div class="item-data">
                                    <!-- price -->
                                    <div class="item-price">
                                        <h4 class="before-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <h4 class="after-dis">
                                            <strong>24.73</strong>
                                            <span>LYD</span>
                                        </h4>
                                        <div class="add-favourite">
                                            <button class="icon-fav added">
                                                <i class="sicon-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- ./price -->

                                    <!-- description -->
                                    <div class="item-dec">
                                        <a href="cart-empty.php">
                                            <span>Garden Olean - Fortifying Hair Oil with Rosemary Essential Oil, 50 ml</span>
                                        </a>
                                    </div>
                                    <!-- ./description -->

                                    <!-- button cart -->
                                    <button class="tocart add-to-cart button--submit" data-title="Add to Cart">
                                        <span class="button-title"></span>
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
                            <!-- product item -->


                        </div>
                    </main>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
