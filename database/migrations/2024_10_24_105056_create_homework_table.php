<?php

use App\Models\Branch;
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
        Schema::create('homeworks', function (Blueprint $table) {
            $table->id();
            
            // Homework details
            $table->string('title'); // Title of the homework
            $table->text('description'); // Detailed description of the homework
            $table->date('due_date'); // Due date for the homework

            // Relations
            $table->foreignId('teacher_id')->constrained('users')->onDelete('cascade'); // Teacher assigning the homework
            $table->json('class_ids');
            $table->json('branch_ids');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade'); // Subject related to the homework
            
            $table->string('attachment')->nullable(); // File attachment for homework instructions or materials

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homeworks');
    }
};
