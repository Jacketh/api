<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class Api
{
    public static function getPostcode(): array
    {
        $request = Http::get('api.postcodes.io/random/postcodes');

        return Arr::get($request, 'result');
    }
}
