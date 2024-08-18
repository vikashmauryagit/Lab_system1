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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('patient_id',50);
            $table->string('pen_card',50);
            $table->enum('title',['mr','ms'])->nullable();
            $table->string('fname',50);
            $table->string('mname',50)->nullable();
            $table->string('lname',50);
            $table->string('dob',50);
            $table->string('age','40');
            $table->enum('sex',['male','female']);
            $table->string('mobile',40)->unique();
            $table->enum('blood_group',['A+','A-','B+','B-','AB+','AB-','O+','O-']);
            $table->string('email',40)->unique()->nullable();
            $table->string('area',40)->nullable();
            $table->string('address','40');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
