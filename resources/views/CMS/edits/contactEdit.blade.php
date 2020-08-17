@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Contact <small>Edit</small></h3>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <form class="form-horizontal form-label-left" action="{{route('Cms.edits.edit_contact',$contact->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h2>Contact Name</h2>
                                <div class="col-sm-12">
                                    <input id="contactname" name="contactname" type="text" class="form-control" placeholder="{{$contact->contactname}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Contact </h2>
                                <div class="col-sm-12">
                                    <input id="contact" name="contact" type="text" class="form-control" placeholder="{{$contact->contact}}">
                                </div>
                            </div>
                            <div class="form-group">
                                <h2>Phone Number </h2>
                                <div class="col-sm-12">
                                    <input id="number" name="number" type="text" class="form-control" placeholder="{{$contact->number}}">
                                </div>
                            </div>


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
