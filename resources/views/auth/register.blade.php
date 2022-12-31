@extends('auth.layouts.main')

@section('title', 'ثبت نام در سایت')

@section('description', 'در این صفحه می‌توانید در سایت ثبت نام کنید.')

@section('content')
    <form id="formAuthentication" class="mb-3" action="{{route('register')}}" method="POST">
        @csrf
        @include('auth.layouts.recaptcha')
    @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        <div class="mb-3">
            <label for="name" class="form-label">نام و نام خانوادگی</label>
            <input type="text" class="form-control text-start" dir="ltr" id="name" name="name" placeholder="نام خود را وارد کنید" value="{{old('name')}}" autofocus>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">ایمیل</label>
            <input type="text" class="form-control text-start" dir="ltr" id="email" name="email" placeholder="ایمیل خود را وارد کنید" value="{{old('email')}}">
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password">رمز عبور</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control text-start" dir="ltr" name="password" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>
        <div class="mb-3 form-password-toggle">
            <label class="form-label" for="password_confirmation">تکرار رمز عبور</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password_confirmation" class="form-control text-start" dir="ltr" name="password_confirmation" placeholder="············" aria-describedby="password">
                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms">
                <label class="form-check-label" for="terms-conditions">
                    من موافقم با
                    <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                </label>
            </div>
        </div>
        <button class="btn btn-primary d-grid w-100">عضویت</button>
    </form>

    <p class="text-center">
        <span>حساب کاربری دارید؟</span>
        <a href="{{route('login')}}">
            <span>وارد شوید</span>
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
