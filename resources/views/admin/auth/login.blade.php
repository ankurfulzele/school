@extends('admin.layout.auth')
@section('content')
<style>
    nav{display: none;}
    body{background:pink;}
    .card-header{text-align: center;padding: 20px;background: antiquewhite;border-bottom: 1px solid black;border-top-left-radius: 5px;border-top-right-radius: 5px;}
    .card{margin-top:10%;border-radius: 5px;}
    .welcome{margin-top:10%;color: #f2f2f2; text-align:center;font-family: 'Libre Baskerville', serif;font-size: 26px;font-weight: 700;}
    </style>
<div class="container-fluid" >
    <div class="row justify-content-center">
        
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div class="welcome">WELCOME TO SKYLARK ADMIN</div>
            <div class="card">
                
            <div class="card-header">{{ __('SIGN IN') }}</div>                
            <div class="body">
            <form method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        
                        @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>                    

                        <div class="form-group row">
                        <div class="col-xs-8 p-t-5">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" class="filled-in chk-col-pink" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6" >
                                <button type="submit" class="btn btn-primary" style="float:left;">
                                    {{ __('Login') }}
                                </button>

                                <!--<div class="col-xs-6 align-right">
                                <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>-->
                            </div>
                        </div>                
            </div>
        </div>
        
        <div class="col-md-4"></div>
    </div>
</div>
@endsection
