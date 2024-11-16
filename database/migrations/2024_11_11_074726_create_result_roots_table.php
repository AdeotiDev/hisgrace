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
        Schema::create('result_roots', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->json('branch_ids');
            $table->json('exam_score_columns');
            $table->integer('grading_system_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_roots');
    }
};
