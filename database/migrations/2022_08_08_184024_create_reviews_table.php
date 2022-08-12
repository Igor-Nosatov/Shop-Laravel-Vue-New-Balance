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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('review_headline', 100);
            $table->string('nickname', 100)->unique();
            $table->text('comment')->nullable();
            $table->enum('overall_fit', ['runs_small', 'true_size','runs_large']);
            $table->integer('rating');
            $table->string('image', 600)->nullable();
            $table->string('location', 300);
            $table->string('email', 300)->unique();
            $table->boolean('policy_agree')->default(0);
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
                $table->foreignId('product_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('reviews');
    }
};
