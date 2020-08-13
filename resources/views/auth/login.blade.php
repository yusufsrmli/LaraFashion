@extends('Front.main')

@section('content')

    <!-- Register Section Begin -->
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="login-form">
                        <h2>Login</h2>
                        {{Form::open(array('route'=>'login'))}}
                            <div class="group-input">
                                <label for="username">Username or email address *</label>
                                <input name="email" id="email" type="text" required="">
                            </div>
                            <div class="group-input">
                                <label for="pass">Password *</label>
                                <input name="password" id="password" type="password" required="" >
                            </div>
                            <div class="group-input gi-check">
                                <div class="gi-more">
                                    <label for="save-pass">
                                        Save Password
                                        <input type="checkbox" id="save-pass">
                                        <span class="checkmark"></span>
                                    </label>
                                    <a href="#" class="forget-pass">Forget your Password</a>
                                </div>
                            </div>
                            {{Form::submit('submit',array('class'=>'btn btn-default submit'))}}
                        {{Form::close()}}
                        <div class="switch-login">
                            <a href="{{route('register')}}" class="or-login">Or Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form Section End -->
@endsection
