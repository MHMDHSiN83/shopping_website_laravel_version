@extends('user.profile.master')


@section('content')
    <div class="row col-md-10">
        <form action="{{route('user.profile.update', Auth::user()->id)}}" method="POST">
            @csrf
            @method('put')
            <div class="d-flex flex-column align-items-center">
                <div class="row mt-5 justify-content-center w-100">
                    <span class="col-1 text-center mt-2">نام</span>
                    <input type="text" class="w-50 form-control" placeholder="محمدحسین" name="fname" value="{{Auth::user()->fname}}">
                </div>
                <div class="row w-100 justify-content-center">
                    <hr class="w-75 border-2 mt-4">
                </div>
                <div class="row mt-5 justify-content-center w-100">
                    <span class="col-1 text-center mt-2">نام خانوادگی</span>
                    <input type="text" class="w-50 form-control" placeholder="شفیعی" name="lname" value="{{Auth::user()->lname}}">
                </div>
                <div class="row w-100 justify-content-center">
                    <hr class="w-75 border-2 mt-4">
                </div>
                <div class="row mt-5 justify-content-center w-100">
                    <span class="col-1 text-center mt-2">ایمیل</span>
                    <input type="text" class="w-50 form-control" placeholder="test@gmail.com" name="email" value="{{Auth::user()->email}}">
                </div>
                <div class="row w-100 justify-content-center">
                    <hr class="w-75 border-2 mt-4">
                </div>
                <div class="row mt-5 justify-content-center w-100">
                    <span class="col-1 text-center mt-2">شماره موبایل</span>
                    <input type="text" class="w-50 form-control" placeholder="۰۹۱۰۲۷۱۳۶۳۱" name="phone_number" value="{{Auth::user()->phone_number}}">
                </div>
                <div class="row mt-4 justify-content-center w-25">
                    <input class="btn btn-success w-25" type="submit" value="ذخیره">
                </div>
                <div class="row w-100 justify-content-center text-center mt-4">
                    <a href="" class="text-decoration-none text-dark">تغییر رمز عبور</a>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection
