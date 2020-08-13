@extends('Front.main')

@section('content')
    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="register-form">
                        <h2>Register</h2>
                        {{Form::open(array('route'=>'register'))}}
                        <div class="group-input">
                            <label for="name">Username *</label>
                            <input name="name" id="name" type="text" id="name">
                        </div>

                            <div class="group-input">
                                <label  for="username">email address *</label>
                                <input name="email" id="email" type="text" >
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input name="password" id="password"  type="text" >
                            </div>
                            <div class="group-input">
                                <label for="con-pass">Confirm Password *</label>
                                <input name="password_confirmation" id="password_confirmation" type="text" id="con-pass">
                            </div>
                            {{Form::submit('submit',array('class'=>'btn btn-default submit'))}}
                        {{Form::close()}}
                        <div class="switch-login">
                            <a href="{{route('login')}}" class="or-login">Or Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
