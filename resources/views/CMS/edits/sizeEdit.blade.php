@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Size<small>Edit</small></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <form role="form" class="form-horizontal form-label-left" action="{{route('Cms.edits.edit_size',$size->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <h2>New Size</h2>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="brand" name="name" placeholder="{{$size->name}}">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Edit/Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
