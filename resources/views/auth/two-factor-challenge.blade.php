@extends('auth.layouts.main')

@section('title', 'ورود دو مرحله ای')

@section('description', 'کد ارسال شده به ایمیل خود را در این صفحه وارد نمایید تا بتوانید وارد حساب کاربری خود شوید.')

@section('content')
    <h4 class="mb-2">تایید دو مرحله‌ای</h4>
    <p class="text-start mb-4">
        ما یک کد تایید به موبایل شما ارسال کردیم. کد ارسال شده را در فیلد زیر وارد کنید.
        <span class="fw-bold d-block mt-2">******1234</span>
    </p>
    <p class="mb-0 fw-semibold">کد 6 رقمی امنیتی را وارد کنید</p>
    <form id="twoStepsForm" action="index.html" method="POST">
        <div class="mb-3">
            <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1" autofocus>
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
                <input type="text" class="form-control auth-input h-px-50 text-center numeral-mask text-center h-px-50 mx-1 my-2" maxlength="1">
            </div>
            <!-- Create a hidden field which is combined by 3 fields above -->
            <input type="hidden" name="otp">
        </div>
        <button class="btn btn-primary d-grid w-100 mb-3">تایید حساب</button>
        <div class="text-center">
            کد را دریافت نکردید؟
            <a href="javascript:void(0);"> ارسال دوباره </a>
        </div>
    </form>
@endsection

@section('js')
    <script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
    <script src="../../assets/js/pages-auth-two-steps.js"></script>
@endsection
