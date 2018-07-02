@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



    <div class="w3-card-4 w3-round-large w3-border-black" style="max-width:600px; margin-left:auto; margin-right:auto; margin-top:50px;">
            <div class="w3-center"><br>
                <img src="{{URL::asset('images/avatar-sign.png')}}" alt="" style="width:30%" class="w3-circle w3-margin-top">
            </div>

            <form method="POST" action="{{ route('login') }}" class="w3-container">
                @csrf
                <div class="w3-section">
                    <h3 style="text-align: center" class="w3-text-blue w3-border-bottom w3-border-blue"><b>Go to Members Area</b></h3>
                    <label class="w3-text-blue"><b>{{ __('E-Mail Address') }}</b></label>
                    <input class="w3-input w3-border w3-margin-bottom w3-round-large w3-border-blue form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="" name="email" id="email" value="{{ old('email') }}" required autofocus style="font-size:1em">
                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <label class="w3-text-blue"><b>{{ __('Password') }}</b></label>
                    <input class="w3-input w3-border w3-round-large w3-border-blue form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" placeholder="" name="password" id="password" required autofocus style="font-size:1em">
                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <div class="form-group row w3-center">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                    </div>
                    
                    

                    <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit" name="Submit" value="Submit"><b>{{ __('Login') }}      <i class="fa fa-sign-in"  style="font-size:18px;"></i></b></button>
                    <a class="w3-text-blue" href="{{ route('password.request') }}" style="text-decoration:none;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                    <a href="/index" class="w3-bar-item w3-button w3-blue" style="width:100%"><b>Back Home       <i class="fa fa-home" style="font-size:18px;"></i> </b></a>
                    <!--                <input class="w3-check w3-margin-top" type="checkbox" checked="checked"> Remember me-->
                </div>
            </form>
        </div>
        @endsection