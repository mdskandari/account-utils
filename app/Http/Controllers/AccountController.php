<?php

namespace App\Http\Controllers;

use App\Services\UserAccountUtils\AccountService;
use Exception;
use http\Exception\InvalidArgumentException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

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
     * Total bank accounts balance
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


    /**
     * Single bank account Balance
     * @param Request $request
     * @return JsonResponse
     */
    public function show(Request $request):JsonResponse
    {
        if (!$request->bank){
            throw new InvalidArgumentException('Parameter "Bank" did not provided.');
        }

        $balance = $this->accountService->bankBalance('123456789');
        $bank = $request->bank;

        return response()->json([
            'status' => 'success',
            'message' => 'bank ' . $bank . '  amount Recovered Successfully',
            'data' => [
                'balance' => $balance
            ]
        ]);
    }
}
