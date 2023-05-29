<?php

namespace App\Services\Banks;

use App\Services\Banks\Contracts\Bank;
use Exception;
use Illuminate\Support\Facades\Http;

class BankA implements Bank
{
    /**
     * @throws Exception
     */
    public static function amount(): \Illuminate\Http\Client\Factory
    {
        return Http::fake([
            'https://banka.ir' => Http::response([
                'amount' => random_int(0, 150)
            ])
        ]);
    }
}
