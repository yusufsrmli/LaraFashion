@extends('Front.main')
@section('content')
    <!-- Hero Section Begin -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

<br><br><br>
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
                                            <li class="w-icon active"><a onclick="add_basket({{$product -> id}})" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fa fa-shopping-bag"></i></a></li>
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
                                        <li class="w-icon active"><i class="fa fa-shopping-bag"><input type="button" name="id" value="{{$product->id}}" class="submit"/> {{--<a href="{{route('Front.add_shoppingcart',$product->id)}}">--}}{{----}}</i></li>
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
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    {{--<script type="text/javascript">
        $('.w-icon active').find('a').click(function (event){
            event.preventDefault();
            $.ajax({
                url: $(this).attr('href')
                ,success: function(response) {
                    alert(response)
                }
            });
            return false; //for good measure
        });
    </script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        function add_basket(id)
        {
            $.ajax({
                type:"get",
                url:"{{route('Front.add_shoppingcart')}}",
                data:{
                    _token: '{{csrf_token()}}' ,
                    product_id: id,

                },
                success:function (result) {
                    if(result['message'] === 'true')
                    {
                        alert("Ürün sepete başarıyla eklendi");
                    }
                }
            })
        }

     {{--   $.ajaxSetup({--}}

     {{--       headers: {--}}

     {{--           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}

     {{--       }--}}

     {{--   });--}}
     {{--   $(".submit").click(function(e){--}}



     {{--       e.preventDefault();--}}


     {{--       var id = $("input[name=id]").val();--}}
     {{--/*       var name = $("input[name=name]").val();--}}

     {{--       var password = $("input[name=password]").val();--}}

     {{--       var email = $("input[name=email]").val();*/--}}

     {{--       $.ajax({--}}


     {{--           type:'POST',--}}

     {{--           url:{{route('Front.add_shoppingcart')}},--}}

     {{--           data:{--}}
     {{--               id:id,--}}
     {{--               _token: '{{csrf_token()}}',--}}
     {{--           },--}}

     {{--           success:function(data){--}}

     {{--               alert(data.success);--}}

     {{--           }--}}

     {{--       });--}}



     {{--   });--}}
     {{--/*function add_basket(id)--}}
     {{--{--}}

     {{--}*/--}}


    </script>

@endsection
