<?php

namespace App\Services\UserAccountUtils\Banks;

use App\Services\Banks\BankA;
use App\Services\UserAccountUtils\Contracts\BankService;
use Exception;
use Illuminate\Support\Facades\Http;

class BankAService implements BankService
{
    /**
     * @throws Exception
     */
    public function fetchAccountBalance(string $accountNumber): array
    {
        BankA::amount();
        $responseBody = json_decode(Http::get('https://banka.ir')->body());

        return [
            'balance' => $responseBody->amount
        ];
    }
}
