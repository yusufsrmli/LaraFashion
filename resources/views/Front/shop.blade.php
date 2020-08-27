@extends('Front.main')
@section('content')

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">
                            <li><a href="#">Men</a></li>
                            <li><a href="#">Women</a></li>

                        </ul>
                    </div>

                    </div>

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">

                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">

                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img style="height: 200px" src="{{asset('images/news/' . \App\Models\Product::find($product->id)->image)}}" alt="">

                                        <ul>
                                            <li class="w-icon active"><a onclick="add_basket({{$product -> id}})" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true"><i class="fa fa-shopping-bag"></i></a></li>
                                            <li class="quick-view" ><a href="{{route('Front.index.archive',$product->id)}}">+ Quick View</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <div class="catagory-name">{{$product->category['name']}}</div>
                                        <a href="{{route('Front.index.archive',$product->id)}}">
                                            <h5>{{$product->name}}</h5>
                                        </a>
                                        <div class="product-price">
                                            ${{$product->price}}

                                        </div>
                                    </div>
                                </div>

                            </div>

                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

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
