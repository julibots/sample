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
        Schema::create('records', function (Blueprint $table) {
            $table->date('record_date');
            $table->unsignedBigInteger('patient_id'); // Add this line
            $table->unsignedBigInteger('appointment_id'); // Add this line
            $table->unsignedBigInteger('dentist_id'); // Add this line

            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('appointment_id')->references('appointment_id')->on('appointments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dentist_id')->references('dentist_id')->on('dentists')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
