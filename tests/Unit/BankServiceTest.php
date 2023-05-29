<?php

namespace Tests\Unit;

use App\Services\UserAccountUtils\Banks\BankAService;
use App\Services\UserAccountUtils\Banks\BankBService;
use App\Services\UserAccountUtils\Banks\BankCService;
use App\Services\UserAccountUtils\Contracts\BankService;
use Tests\TestCase;

class BankServiceTest extends TestCase
{
    private BankService $bankService;

    public function testBankAServiceGetsData(): void
    {
        $this->bankService = new BankAService();

        $data = $this->bankService->fetchAccountBalance('123456789');

        $this->assertArrayHasKey('balance', $data);
    }

    public function testBankBServiceGetsData(): void
    {
        $this->bankService = new BankBService();

        $data = $this->bankService->fetchAccountBalance('123456789');

        $this->assertArrayHasKey('balance', $data);
    }

    public function testBankCServiceGetsData(): void
    {
        $this->bankService = new BankCService();

        $data = $this->bankService->fetchAccountBalance('123456789');

        $this->assertArrayHasKey('balance', $data);
    }
}
