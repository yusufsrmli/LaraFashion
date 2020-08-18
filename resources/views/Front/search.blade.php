@extends('Front.main')
@section('content')
    <section class="product-shop spad">
        <div class="container">
            <h1>Search Results</h1>
            <br><br>
            <div class="row">
                @if(count($results)==0)
                    <div >
                        <p>No Result</p>.
                    </div>
                @endif
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">
                            @foreach($results as $result)
                                <div class="col-lg-4 col-sm-6">

                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img style="height: 200px" src="{{asset('images/news/' . \App\Models\Product::find($result->id)->image)}}" alt="">

                                            <ul>
                                                <li class="w-icon active"><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                                                <li class="quick-view" ><a href="{{route('Front.index.archive',$result->id)}}">+ Quick View</a></li>
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$result->category['name']}}</div>
                                            <a href="{{route('Front.index.archive',$result->id)}}">
                                                <h5>{{$result->name}}</h5>
                                            </a>
                                            <div class="product-price">
                                                ${{$result->price}}

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
@endsection
