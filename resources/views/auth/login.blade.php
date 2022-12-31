@extends('auth.layouts.main')

@section('title', 'ورود به سایت')

@section('description', 'در این صفحه می‌توانید وارد اکانت خود در وب‌سایت شوید.')

@section('content')
    <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
        @csrf
        @include('auth.layouts.recaptcha')
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start" dir="ltr" id="email" name="email" placeholder="ایمیل یا نام کاربری خود را وارد کنید" autofocus>
        </div>
        <div class="mb-3 form-password-toggle">
            <div class="d-flex justify-content-between">
                <label class="form-label" for="password">رمز عبور</label>
                <a href="{{route('password.email')}}">
                    <small>رمز عبور را فراموش کردید؟</small>
                </a>
            </div>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control text-start" dir="ltr" name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember-me">
                <label class="form-check-label" for="remember-me"> به خاطر سپاری </label>
            </div>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary d-grid w-100" type="submit">ورود</button>
        </div>
    </form>

    <p class="text-center">
        <span>کاربر جدید هستید؟</span>
        <a href="{{route('register')}}">
            <span>یک حساب بسازید</span>
        </a>
    </p>

    <div class="divider my-4">
        <div class="divider-text">یا</div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
            <i class="tf-icons bx bxl-facebook"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
            <i class="tf-icons bx bxl-google-plus"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-twitter">
            <i class="tf-icons bx bxl-twitter"></i>
        </a>
    </div>
@endsection
