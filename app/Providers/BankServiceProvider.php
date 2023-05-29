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
    /**
     * Register services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
//        dd(request()->route('bank'));

        $this->app-> bind(BankService::class, function (Application $app) {
            return new BankAService();
        });

//        if (request()->bank) {
//            $bank = request()->bank;
//
//            \App::bind(BankService::class, function (Application $app) use ($bank) {
////                switch ($bank) {
////                    case 'a':
//                        return $app->make(BankAService::class);
////                        break;
////                    case 'b':
////                        return new BankBService();
////                        break;
////                    case 'c':
////                        return new BankCService();
////                        break;
////                }
//            });
//        }
    }
}
