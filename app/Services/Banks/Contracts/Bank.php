<?php

namespace App\Services\Banks\Contracts;

interface Bank
{
    public static function amount(): \Illuminate\Http\Client\Factory;
}
