<?php

namespace App\Services\UserAccountUtils;

use App\Services\UserAccountUtils\Banks\BankAService;
use App\Services\UserAccountUtils\Banks\BankBService;
use App\Services\UserAccountUtils\Banks\BankCService;
use App\Services\UserAccountUtils\Contracts\BankService;

class AccountService
{
//    private BankService $bankService;
//
//    /**
//     * @param BankService $bankService
//     */
//    public function __construct(BankService $bankService)
//    {
//        $this->bankService = $bankService;
//    }


    public function fullBalance()
    {
        // get all user banks
        $banks = $this->getAllUsersBanks();
        $totalAmount = 0;
        foreach ($banks as $bank){
            $totalAmount +=  $bank->fetchAccountBalance('1234567890')['balance'];
        }
        return $totalAmount;
    }

//    public function bankBalance(string $accountNumber): int
//    {
//        return $this->bankService->fetchAccountBalance($accountNumber)->balance;
//    }

    public function getAllUsersBanks(): array
    {
        // check if user has account in all banks and return their instance
        // in this case we just say user has on account in each bank
        return [
             new BankAService(),
             new BankBService(),
             new BankCService()
        ];
    }
}
