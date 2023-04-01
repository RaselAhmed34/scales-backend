<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::replacer('required', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'هذه الخانة مطلوبه.');
        });
        Validator::replacer('integer', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'يجب أن يكون هذا الحقل عددًا صحيحًا');
        });
        Validator::replacer('unique', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'تم أخذ هذه البيانات بالفعل');
        });
        Validator::replacer('digits', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':attribute', $attribute, 'يجب أن يتكون حقل رقم الهاتف من 10 أرقام');
        });
    }
}
