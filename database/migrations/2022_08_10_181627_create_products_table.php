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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('description');
            $table->integer('weight')->nullable();
            $table->string('style_code', 200)->nullable();
            $table->integer('price');
            $table->string('style', 200);
            $table->foreignId('feature_id')->constrained()->nullable();
            $table->foreignId('footwear_size_id')->constrained()->nullable();
            $table->foreignId('fit_id')->constrained()->nullable();
            $table->foreignId('width_id')->constrained()->nullable();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('category_id')->constrained();
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
        Schema::dropIfExists('products');
    }
};
