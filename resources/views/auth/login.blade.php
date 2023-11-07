@extends('master')

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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="login-box">
    <form method="post" action="{{route('login')}}">
        @csrf
        <div class="h2 title">ورود به رزومه سرا</div>
        {{-- <div class="error"><?php echo $error; ?></div> --}}
        <div class="controls">
            <input type="email" name="email" class="InputText @error('email') is-invalid @enderror" required value="{{old('email')}}">
            <label >ایمیل</label>
        </div>
        <div class="controls">
            <input type="password" name="password" class="InputText @error('email') is-invalid @enderror" required autocomplete="off">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label >رمز عبور</label>
        </div>
        <div class="controlscheck">
            <input type="checkbox" name="remember">
            <span class="lable-check">مرا به خاطر بسپار</span>
        </div>
        <div class="controls">
            <input type="submit" value="ورود" class="Registary-btn" autocomplete="off">
        </div>
        <div class="a-form">
            <span>هنوز ثبت نام نکرده‌اید؟</span><a href="registry.php">ثبت نام</a>
            <br>
            <a href="" class="bottom-a">رمز عبور خود را فراموش کرده‌اید؟</a>
        </div>
    </form>
</div>



@endsection




