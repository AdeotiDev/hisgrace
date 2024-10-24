<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bus_student', function (Blueprint $table) {
        $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
        $table->foreignId('bus_id')->constrained('buses')->onDelete('cascade');
        $table->primary(['student_id', 'bus_id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_students');
    }
};
