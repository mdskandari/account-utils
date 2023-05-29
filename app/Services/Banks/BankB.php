<?php

namespace App\Services\Banks;

use App\Services\Banks\Contracts\Bank;
use Exception;
use Illuminate\Support\Facades\Http;

class BankB implements Bank
{

    /**
     * @throws Exception
     */
    public static function amount(): \Illuminate\Http\Client\Factory
    {
        return Http::fake([
            'https://bankb.ir' => Http::response([
                'balance' => 2
            ])
        ]);
    }
}
