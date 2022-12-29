@extends('auth.layouts.main')

@section('title', 'تایید ایمیل')

@section('description', 'در این صفحه ایمیل خود را تایید نمایید تا ثبت نام شما تکمیل شود.')

@section('content')
    <h4 class="mb-2">ایمیل خود را تایید کنید</h4>
    <p class="text-start">
        لینک فعال‌سازی حساب به ایمیل شما ارسال شد:<br>hello@example.com<br> لطفا لینک ارسال شده را برای ادامه دنبال کنید.
    </p>
    <a class="btn btn-primary w-100 my-3" href="index.html"> فعلا رد کنید </a>
    <p class="text-center">
        ایمیل را دریافت نکردید؟
        <a href="javascript:void(0);"> ارسال دوباره </a>
    </p>
@endsection
