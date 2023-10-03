@extends('website.layouts.app')

@section('content')
    <!-- page title start -->
    <section class="page_title_area" data-background="{{asset('website/img/bg/page_title.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="page_title">
                        <h1>Shop TopBar</h1>
                        <ul class="breadcrumb_nav ul_li">
                            <li><a href="index.html">Home</a></li>
                            <li>Online Shop</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page_title_img">
                        <img src="{{asset('website/img/bg/page_title_img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- page title end -->

    <!-- shop start -->
    <section class="shop_area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="masonry_active mb-40">
                        <button class="active" data-filter="*">all categories</button>
                        <button data-filter=".cat1">Pizza</button>
                        <button data-filter=".cat2">Burger</button>
                        <button data-filter=".cat3">Blueberry Shake</button>
                        <button data-filter=".cat4">Chicken Chup</button>
                        <button data-filter=".cat5">Ice Cream</button>
                        <button data-filter=".cat6">Drink</button>
                    </div>
                </div>
            </div>
            <div class="row grid">
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat4 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_01.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Fizza</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Chicken fry</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$53.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat2 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_02.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                            <span class="badge">10%-</span>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Chicken</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Bangladeshi Sendrues</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span class="new">$53.00</span>
                                <span class="old">$75.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat4 cat1 cat3 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_03.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Double Stuck Burgar</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$33.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat1 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_04.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Chinis Popular Noudlus</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$13.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat1 cat2 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_05.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Chicken</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Full Chicken</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span class="new">$66.00</span>
                                <span class="old">$77.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat4 cat2">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_06.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                            <span class="badge">New</span>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Full Burgar</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Bangladeshi Sendrues</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$53.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat2 cat6">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_08.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Fizza</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Chinis Popular Noudlus</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$63.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat4 cat1 cat3 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_08.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Fizza</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Chicken fry</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$53.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 grid-item mb-30 cat3 cat1 cat5">
                    <div class="shop_single white_bg">
                        <div class="thumb text-center">
                            <a class="image" href="shop-details.html"><img src="{{asset('website/img/shop/img_09.png')}}" alt=""></a>
                            <div class="actions">
                                <a href="#" class="action"><i class="fal fa-shopping-basket"></i></a>
                                <a href="#" class="action"><i class="fal fa-heart"></i></a>
                                <a href="#" class="action"><i class="fal fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="content">
                            <div class="s_top ul_li">
                                <span class="cat">Fizza</span>
                                <ul class="rating_star ul_li">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                    <li><i class="fal fa-star"></i></li>
                                </ul>
                            </div>
                            <h3 class="title"><a href="shop-details.html">Unlimited Chicken fry</a></h3>
                            <div class="s_bottom ul_li">
                                <span class="price">Price -</span>
                                <span>$53.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pagination_wrap pt-30">
                        <ul>
                            <li><a href="#"><i class="fal fa-angle-double-left"></i></a></li>
                            <li><a href="#" class="current_page">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#"><i class="fal fa-ellipsis-h"></i></a></li>
                            <li><a href="#">08</a></li>
                            <li><a href="#"><i class="fal fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop end -->


@endsection
