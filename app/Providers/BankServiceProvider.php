<?php

namespace App\Providers;

use App\Services\UserAccountUtils\Banks\BankAService;
use App\Services\UserAccountUtils\Banks\BankBService;
use App\Services\UserAccountUtils\Banks\BankCService;
use Illuminate\Contracts\Foundation\Application;

use App\Services\UserAccountUtils\Contracts\BankService;
use Illuminate\Support\ServiceProvider;

class BankServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if (request()->bank) {
            $bank = request()->bank;

            $this->app->bind(BankService::class, function (Application $app) use ($bank) {
                return match ($bank) {
                    'a' => new BankAService(),
                    'b' => new BankBService(),
                    'c' => new BankCService(),
                    default => new BankAService(),
                };
            });
        } else {
            $this->app->bind(BankService::class, function (Application $app) {
                // users default bank
                return new BankAService();
            });
        }
    }
}
