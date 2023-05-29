<?php

namespace Tests\Feature;

use App\Services\UserAccountUtils\AccountService;
use App\Services\UserAccountUtils\Banks\BankAService;
use App\Services\UserAccountUtils\Banks\BankBService;
use App\Services\UserAccountUtils\Banks\BankCService;
use Tests\TestCase;

class AccountServiceTest extends TestCase
{
    private AccountService $accountService;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->accountService = new AccountService();
    }

    public function testGetAllUsersAccount()
    {
        // must act like an authenticated user
        // $this->actingAs()

        $banks = $this->accountService->getAllUsersBanks();

        $this->assertIsArray($banks);

    }

    public function testGetFullBalance()
    {
        // must act like an authenticated user
        // $this->actingAs()

        $banks = $this->accountService->fullBalance();

        $this->assertIsInt($banks);

    }
}
