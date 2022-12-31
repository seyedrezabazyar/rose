<script src="https://www.google.com/recaptcha/api.js?hl={{config('app.locale')}}&render={{env('GOOGLE_RECAPTCHA_V3_KEY')}}"></script>
<input type="hidden" name="g-recaptcha" id="g-recaptcha">
<script>
    grecaptcha.ready(function () {
        grecaptcha.execute('{{env('GOOGLE_RECAPTCHA_V3_KEY')}}', {action: 'submit'}).then(function (token) {
            document.getElementById('g-recaptcha').value = token;
        });
    });
</script>
