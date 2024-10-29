<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradingSystemsTable extends Migration
{
    public function up()
    {
        Schema::create('grading_systems', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Standard Grading System"
            $table->json('grading_system'); // Store grading data as JSON
            $table->json('branch_ids'); // Store branch IDs as JSON
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('grading_systems');
    }
}
