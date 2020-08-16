@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Product <small>List</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">ID</th>
                                <th style="width: 15%">Name</th>
                                <th style="width: 10%">Brand</th>
                                <th style="width: 10%">Color</th>
                                <th style="width: 10%">Category</th>
                                <th style="width: 10%">Size</th>
                                <th style="width: 15%">Price</th>
                                <th style="width: 20%">Edit</th>
                            </tr>
                            </thead>
                            <tbody>

                            @php $i=1; @endphp
                            @foreach($products as $product)
                                <tr>
                                    <td style="width: 5%">{{$i}}</td>
                                    <td style="width: 40%">
                                        <a>{{$product->product_name}}</a>
                                    </td>

                                    <td style="width: 10%">
                                        <small>{{$product-> brand -> brand}}</small>
                                    </td>
                                    <td style="width: 10%">
                                        @foreach( $product -> colors as $key_value => $color)
                                        <small> {{$color -> color -> color }}</small>
                                        @endforeach
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$product-> category -> category}}</small>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$product-> size -> size}}</small>
                                    </td>
                                    <td style="width: 10%">
                                        <small>{{$product-> product_price}}</small>
                                    </td>
                                    <td style="width: 15%">
                                        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                    </td>
                                </tr>
                                @php $i=$i+1; @endphp
                            @endforeach

                            </tbody>
                        </table>
                        <!-- end project list -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


