<?php

namespace App\Traits;

trait LocaleTrait
{
    public static function locale($local): string
    {
        $app = $local . '_' . app()->getLocale();
        return "$app";
    }
}
