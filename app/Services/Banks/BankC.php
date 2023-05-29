<?php

namespace App\Services\Banks;

use App\Services\Banks\Contracts\Bank;
use Exception;
use Illuminate\Support\Facades\Http;

class BankC implements Bank
{
    /**
     * @throws Exception
     */
    public static function amount(): \Illuminate\Http\Client\Factory
    {
        return Http::fake([
            'https://bankc.ir' => Http::response([
                'value' => random_int(0, 150)
            ])
        ]);
    }
}
