{{--  @extends('layouts.app')  --}}
@include('layouts.layoutMain')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"></div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header" style="font-size: 20px;">{{ __('Login') }}</div>

                <div class="card-body" style=" margin-bottom: 100px; margin-top: 50px; ">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" id="form-login">
                        @csrf

                        <div class="form-group row">
                            <div style="margin: 0 auto">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    <span class="text-danger" id="error-login"></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            </div>
                        </div>

                        {{--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                

                                {{--  <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>  --}}

                                <a class="btn btn-link" href="{{ route('register') }}">
                                    {{ __('You don\'t have an account yet?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('javascript')
    <script src="{{ URL::asset('js/auth/login.js') }}"></script>
@endsection
@include('layouts.layoutMainFooter')

