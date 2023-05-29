<?php

namespace App\Services\UserAccountUtils\Banks;

use App\Services\Banks\BankB;
use App\Services\UserAccountUtils\Contracts\BankService;
use Exception;
use Illuminate\Support\Facades\Http;

class BankBService implements BankService
{
    /**
     * @throws Exception
     */
    public function fetchAccountBalance(string $accountNumber): array
    {
        BankB::amount();
        $responseBody = json_decode(Http::get('https://bankb.ir')->body());

        return [
            'balance' => $responseBody->balance
        ];
    }
}
