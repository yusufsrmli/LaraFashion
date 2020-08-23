@extends('Front.main')
@section('content')
    <!-- Hero Section Begin -->
    <br>
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg" data-setbg="/images/news/banner-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <h1>Women's Collection</h1>

                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="single-hero-items set-bg" data-setbg="/images/news/banner-1.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">

                            <h1>Men's Collection</h1>

                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-banner">
                        <img src="/images/news/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-banner">
                        <img src="/images/news/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="/images/news/banner-2.jpg">
                        <h1>Women’s</h1>
                        <a href="#" style="color: black">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control">

                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach($products as $product)
                            @if ($product->gender === 'women')
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{asset('images/news/' . \App\Models\Product::find($product->id)->image)}}" alt="" style="height: 200px">


                                        <ul>
                                            <li class="w-icon active"><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                            <li class="quick-view"><a href="{{route('Front.index.archive',$product->id)}}"> Quick View</a></li>

                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category['name']}}</div>
                                        <a href="{{route('Front.index.archive',$product->id)}}">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{$product->price}}$

                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

<hr/>

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control">

                    </div>
                    <div class="product-slider owl-carousel">
                        @foreach($products as $product)
                            @if ($product->gender === 'men')
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="{{asset('images/news/' . \App\Models\Product::find($product->id)->image)}}" alt="" style="height: 200px">


                                    <ul>
                                        <li class="w-icon active"><a href="{{route('Front.add_shoppingcart',$product->id)}}"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li class="quick-view"><a href="{{route('Front.index.archive',$product->id)}}"> Quick View</a></li>

                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{$product->category['name']}}</div>
                                    <a href="{{route('Front.index.archive',$product->id)}}">
                                        <h5>{{$product->name}}</h5>
                                    </a>
                                    <div class="product-price">
                                        {{$product->price}}$

                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="/images/news/banner-1.jpg">
                        <h1>Men’s</h1>
                        <a href="#" style="color: #000000">Discover More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr/>
    <!-- Man Banner Section End -->
@endsection
