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
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('test_name', 40);
            $table->string('short_name', 40);
            $table->string('tech_name', 40);
            $table->string('test_price', 30);
            $table->foreignId('sub_id')->references('id')->on('sub_departments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('center_id')->references('id')->on('centers')->cascadeOnDelete()->cascadeOnUpdate();
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
    }
};
