<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('currency_koyas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code');
            $table->string('currency_code');
            $table->integer('order')->default(0);
            $table->float('sale', 20, 0);
            $table->float('buy', 20, 0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('currency_koyas');
    }
};
