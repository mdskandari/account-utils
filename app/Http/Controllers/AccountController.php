<?php

namespace App\Http\Controllers;

use App\Services\Banks\BankB;
use App\Services\Banks\BankC;
use App\Services\UserAccountUtils\AccountService;
use App\Services\UserAccountUtils\Banks\BankBService;
use App\Services\UserAccountUtils\Contracts\BankService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use JetBrains\PhpStorm\NoReturn;

class AccountController extends Controller
{

    private AccountService $accountService;

    /**
     * @param AccountService $accountService
     */
    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }


    /**
     * @throws Exception
     */
    public function index()
    {
        $totalAmount = $this->accountService->fullBalance();

        return response()->json([
            'status' => 'success',
            'message' => 'Total amount Recovered Successfully',
            'data' => [
                'amount' => $totalAmount
            ]
        ]);
    }

    public function show(string $bank)
    {
//        dd($this->bankService->fetchAccountBalance('4513218643165166'));
    }
}
