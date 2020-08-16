@extends('CMS.main')
@section('content')


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product <small>Add</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        @if($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{route('Cms.news.create_product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h2> Product Image</h2>
                                <div class="col-sm-12">
                                    <input type="file" name="image" id="image" class="btn btn-default btn-sm" title="Upload New Image">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Product Name</h2>
                                <div class="col-sm-12">
                                    <input id="product_name" name="product_name" type="text" class="form-control" placeholder="Producrt Name">
                                </div>
                            </div>
                            <br>

                            <div class="form-group">

                                        Choose a brand:
                                        <select name="brand_id" id="brand_id" class="form-control form-control-lg" >
                                            @foreach($brands as $brand)
                                            <option value="{{$brand -> id}}">{{$brand->brand}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                            </div>
                            <div class="form-group">
                                    Chose a color:
                                <select name="colors[]" id="colors"  multiple="multiple" class="form-control form-control-lg" >
                                        @foreach($colors as $color)
                                            <option value="{{$color -> id}}">{{$color->color}}</option>
                                        @endforeach
                                    </select>
                            </div>

                                <script>
                                    $(document).ready(function () {
                                        $("#colors").select2({
                                            maximumSelectionLength: 2
                                        });
                                    });
                                </script>

                            <div class="form-group">
                                   Choose a category:
                                    <select name="category_id" id="category_id" class="form-control form-control-lg">
                                        @foreach($categories as $category)
                                            <option value="{{$category -> id}}">{{$category -> category}}</option>
                                        @endforeach
                                    </select>
                            </div>
                                    <br>

                                <div class="form-group">

                                    Choose a size:
                                    <select name="size_id" id="size_id" class="form-control form-control-lg">

                                        @foreach($sizes as $size)
                                            <option value="{{$size -> id}}">{{$size->size}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <br>
                            <div class="form-group">
                                <h2>Product Price</h2>
                                <div class="col-sm-12">
                                    <input id="product_price" name="product_price" type="text" class="form-control" placeholder="Producrt Price">
                                </div>

                            </div>
                            <br>

                                <div class="form-group">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('CMS/vendors/summernote/summernote.js')}}"> </script>

    <script>
        $(document).ready(function (){
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('styles')
    <link href="{{asset('CMS/vendors/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
@endsection
