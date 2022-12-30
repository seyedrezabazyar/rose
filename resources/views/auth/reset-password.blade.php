@extends('auth.layouts.main')

@section('title', 'تنظیم رمز عبور جدید')

@section('description', 'در این صفحه می توانید رمز عبور جدید برای حساب کاربری خود تنظیم نمایید.')

@section('content')
    <h4 class="mb-2">بازنشانی رمز عبور</h4>
    <p class="mb-4">برای <span class="fw-bold">{{$request->email}}</span></p>
    <form id="formAuthentication" class="mb-3" action="{{route('password.update')}}" method="POST">
        @csrf
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">رمز عبور جدید</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control text-start" dir="ltr" name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="confirm-password">تایید رمز عبور</label>
            <div class="input-group input-group-merge">
                <input type="password" id="confirm-password" class="form-control" name="confirm-password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <input type="hidden" name="email" value="{{$request->email}}">
{{--        <input type="hidden" name="token" value="{{ $token }}">--}}
        <button class="btn btn-primary d-grid w-100 mb-3">تنظیم رمز عبور جدید</button>
        <div class="text-center">
            <a href="{{route('login')}}">
                <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                بازگشت به ورود
            </a>
        </div>
    </form>
@endsection
