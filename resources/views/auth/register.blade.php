@extends('master')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="login-box">
    <form method="post" action="{{route('register')}}">
        @csrf
        <h1>ثبت نام در رزومه سرا</h1>
        {{-- <div class="error"><?php echo $error; ?></div> --}}
        <div class="controls">
            <input type="text" class="InputText" autocomplete="off" required name="name" value="{{ old('name') }}">
            <label >نام کاربری</label>
        </div>
        <div class="controls">
            <input type="email" class="InputText" autocomplete="off" required name="email" value="{{ old('email') }}">
            <label >ایمیل</label>
        </div>
        <div class="controls">
            <input type="password"  name="password" class="InputText" autocomplete="off" required >
            <label >رمز عبور</label>
        </div>
        <div class="controls">
            <input type="password"  name="password_confirmation" class="InputText" autocomplete="off" required>
            <label >تکرار رمز عبور</label>
        </div>
        <div class="controls">
            <input type="submit" value="ثبت نام" class="Registary-btn">
        </div>
        <div class="a-form">
            <span>در سایت عضو هستم</span> <a href="#">ورود</a>
        </div>
    </form>
</div>

@endsection
