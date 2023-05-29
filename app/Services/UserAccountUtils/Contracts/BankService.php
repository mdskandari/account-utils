<?php

namespace App\Services\UserAccountUtils\Contracts;

interface BankService
{
    public function fetchAccountBalance(string $accountNumber): array;
}
