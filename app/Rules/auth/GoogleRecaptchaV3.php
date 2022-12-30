<?php

namespace App\Rules\auth;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Http;

class GoogleRecaptchaV3 implements Rule
{
    public int $minimumHumanScore;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $minimumHumanScore)
    {
        $this->minimumHumanScore = $minimumHumanScore;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
//        if (env('APP_MODE') === 'development')
//            return true;

        try {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => env('GOOGLE_RECAPTCHA_V3_SECRET'),
                'response' => request()->input('g-recaptcha'),
                'remoteip' => request()->ip()
            ]);

            $responseObject = json_decode($response->body());

            return $responseObject->success && ($responseObject->score > ($this->minimumHumanScore / 10));

        } catch (\Exception $e) {
            // TODO log an error
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Complete the reCAPTCHA to submit the form';
    }
}
