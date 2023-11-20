<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Artisan::call('db:seed ExchangeSeeder --force');
        Artisan::call('db:seed BlockchainSeeder --force');
        Artisan::call('db:seed CryptocurrencySeeder --force');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
