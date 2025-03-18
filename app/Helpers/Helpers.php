<?php

use App\Models\GeneralSetting;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

function gs($key = null)
{
    $general = Cache::get('GeneralSetting');
    if (!$general) {
        $general = GeneralSetting::first();
        Cache::put('GeneralSetting', $general);
    }
    if ($key) {
        return @$general->$key;
    }

    return $general;
}
function logo()
{
    if (Schema::hasTable('general_settings')) {
        return gs('logo') ? env('APP_URL') . '/storage/' . gs('logo') : asset('assets/images/logo/logo.png');
    }

    return asset('assets/images/logo/logo.png');
}

function favicon()
{
    if (Schema::hasTable('general_settings')) {
        return gs('favicon') ? env('APP_URL') . '/storage/' . gs('favicon') : asset('assets/images/logo/favicon.png');
    }

    return asset('assets/images/logo/favicon.png');
}
function format_phone_number(string $phoneNumber, string $countryCode = '+234'): string
{
    // Remove non-numeric characters
    $digits = preg_replace('/\D/', '', $phoneNumber);

    // Ensure it's at least 10 digits (for local numbers)
    if (strlen($digits) < 10) {
        return $phoneNumber; // Return as is if it's not a valid phone number
    }

    // Extract parts (assuming Nigerian 10-digit format)
    $areaCode = substr($digits, 0, 3);
    $firstPart = substr($digits, 3, 3);
    $secondPart = substr($digits, 6, 4);

    return sprintf('%s (%s) %s-%s', $countryCode, $areaCode, $firstPart, $secondPart);
}
function setActiveMenu(string $routeName, string $activeClass = 'current-menu'): string
{
    return request()->routeIs($routeName) ? $activeClass : '';
}
