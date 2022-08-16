<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained();
            $table->string('first_name', 300);
            $table->string('last_name', 300);
            $table->string('street', 300);
            $table->string('state', 300);
            $table->string('zip_code', 300);
            $table->string('phone', 300)->unique();
            $table->string('email', 300)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('checkouts');
    }
};
