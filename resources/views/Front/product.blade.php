@extends('Front.main')
@section('content')
    <div class="container" style="margin-top: 13px">
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="{{asset('images/news/' . \App\Models\Product::find($product->id)->image)}}" alt="">
                    <div class="zoom-icon">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="product-details">
                    <div class="pd-title">

                        <h3>{{$product->name}}</h3>

                    </div>

                    <div class="pd-desc">
                        <h4>${{$product->price}}</h4>
                    </div>
                    <div class="pd-color">
                        <h6>Color:</h6>
                        <div class="pd-color-choose">
                            <div class="cc-item">
                                @foreach( $product -> colors as $key_value => $color)
                                    {{$color -> color['name'] }}
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="pd-size-choose">
                        <h6>Size:</h6>
                        <div class="sc-item">
                            <div class="cc-item">
                            {{$product->size['name']}}
                            </div>
                        </div>

                    </div>
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="text" value="1">
                        </div>
                        <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                    </div>
                    <ul class="pd-tags">
                        <li><span>CATEGORIES</span>: {{$product->category['name']}}</li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="product-tab">
            <div class="tab-item">
                <ul class="nav" role="tablist">

                    <li>
                        <a data-toggle="tab" href="#tab-2" role="tab">SPECIFICATIONS</a>
                    </li>

                </ul>
            </div>
            <div class="tab-item-content">
                <div class="tab-content">

                    <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                        <div class="specification-table">
                            <table>

                                <tr>
                                    <td class="p-catagory">Price</td>
                                    <td>
                                        <div class="p-price">${{$product->price}}</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="p-catagory">Size</td>
                                    <td>
                                        <div class="p-size">{{$product->size['name']}}</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-catagory">Color</td>
                                    <td>
                                        @foreach( $product -> colors as $key_value => $color)
                                        <span>{{$color -> color['name'] }}</span>

                                    @endforeach
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Product Shop Section End -->
    <br><br>
@endsection
