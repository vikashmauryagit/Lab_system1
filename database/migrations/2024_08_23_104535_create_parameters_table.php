<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->id();
            $table->string('paraName', 40);
            $table->string('unit', 30);
            $table->string('decimal', 30);
            $table->string('helpvalue', 30);
            $table->string('normalrange', 30);
            $table->string('min', 30);
            $table->string('max', 30);
            $table->foreignId('test_id')->references('id')->on('tests')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('footer', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parameters');
    }
};
