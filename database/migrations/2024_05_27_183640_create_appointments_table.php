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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('appointment_id');
            $table->unsignedBigInteger('patient_id'); // Add this line
            $table->unsignedBigInteger('dentist_id'); // Add this line
            $table->string('service_type');
            $table->string('mode_of_payment');
            $table->date('appoint_date');
            $table->time('appoint_time');

            $table->foreign('patient_id')->references('patient_id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('dentist_id')->references('dentist_id')->on('dentists')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
