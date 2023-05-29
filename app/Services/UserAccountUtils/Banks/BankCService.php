<?php

namespace App\Services\UserAccountUtils\Banks;

use App\Services\Banks\BankC;
use App\Services\UserAccountUtils\Contracts\BankService;
use Exception;
use Illuminate\Support\Facades\Http;

class BankCService implements BankService
{
    /**
     * @throws Exception
     */
    public function fetchAccountBalance(string $accountNumber): array
    {
        BankC::amount();
        $responseBody = json_decode(Http::get('https://bankc.ir')->body());

        return [
            'balance' => $responseBody->value
        ];
    }

}
