@extends('auth.layouts.main')

@section('title', 'فراموشی رمز عبور')

@section('description', 'اگر رمز عبور خود را فراموش کرده اید، برای بازگردانی رمز عبور خود از این صفحه استفاده نمایید.')

@section('content')
    <h4 class="mb-2">رمز عبور را فراموش کردید؟</h4>
    <p class="mb-4">ایمیل خود را وارد کنید و ما دستورالعمل های لازم را برای بازنشانی رمز عبور برای شما ارسال خواهیم کرد.</p>
    <form id="formAuthentication" class="mb-3" action="auth-reset-password-basic.html" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start" dir="ltr" id="email" name="email" placeholder="ایمیل خود را وارد کنید" autofocus>
        </div>
        <button class="btn btn-primary d-grid w-100">ارسال لینک بازنشانی</button>
    </form>
    <div class="text-center">
        <a href="auth-login-basic.html" class="d-flex align-items-center justify-content-center">
            <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
            بازگشت به ورود
        </a>
    </div>
@endsection
