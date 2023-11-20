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
        Schema::create('cryptocurrency_blockchains', function (Blueprint $table) {
            $table->id();
            $table->int('blockchain_id');
            $table->int('cryptocurrency_id');
            $table->string('referral-code');
            $table->timestamps();

            $table->foreign('blockchain_id')->references('id')->on('blockchains');
            $table->foreign('cryptocurrency_id')->references('id')->on('cryptocurrencies');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign('cryptocurrency_blockchains_blockchain_id_foreign');
        $table->dropForeign('cryptocurrency_blockchains_cryptocurrency_id_foreign');

        Schema::dropIfExists('cryptocurrency_blockchains');
    }
};
