<?php

use App\Models\Setting;

if (!function_exists('setting')) {

    function setting()
    {
        $setting = Setting::select(['key', 'value'])->get();
        $settings = [];

        foreach ($setting as $item) {
            $settings[$item->key] = $item->value;
        }

        if ($settings) {
            return (object)$settings;
        }

        return false;
    }

}