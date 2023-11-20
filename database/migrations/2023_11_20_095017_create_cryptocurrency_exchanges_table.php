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
        Schema::create('cryptocurrency_exchanges', function (Blueprint $table) {
            $table->id();
            $table->int('exchange_id');
            $table->int('cryptocurrency_id');
            $table->timestamps();

            $table->foreign('exchange_id')->references('id')->on('exchanges');
            $table->foreign('cryptocurrency_id')->references('id')->on('cryptocurrencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign('cryptocurrency_exchanges_exchange_id_foreign');
        $table->dropForeign('cryptocurrency_exchanges_cryptocurrency_id_foreign');

        Schema::dropIfExists('cryptocurrency_exchanges');
    }
};
