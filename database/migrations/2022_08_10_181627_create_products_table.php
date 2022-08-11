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
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 200);
            $table->text('description');
            $table->integer('weight')->nullable();
            $table->string('style_code', 200)->nullable();
            $table->integer('price');
            $table->foreignId('feature_id')->constrained()->nullable();
            $table->foreignId('footwear_size_id')->constrained()->nullable();
            $table->foreignId('clothing_size_id')->constrained()->nullable();
            $table->foreignId('gender_neutral_size_id')->constrained()->nullable();
            $table->foreignId('fit_id')->constrained()->nullable();
            $table->foreignId('style_id')->constrained()->nullable();
            $table->foreignId('width_id')->constrained()->nullable();
            $table->foreignId('gender_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('sub_category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
