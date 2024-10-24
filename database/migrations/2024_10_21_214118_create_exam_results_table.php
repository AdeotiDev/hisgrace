<?php

use App\Models\Exam;
use App\Models\SchoolClass;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
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
    Schema::create('exam_results', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(Student::class)->onDelete('cascade');
        $table->foreignIdFor(Exam::class)->onDelete('cascade');
        $table->foreignIdFor(User::class)->onDelete('cascade')->comment('recorded by');
        $table->foreignIdFor(Subject::class)->onDelete('cascade');
        $table->foreignIdFor(SchoolClass::class, )->onDelete('cascade');
        $table->integer('mark1')->default(0);
        $table->integer('mark2')->default(0);
        $table->integer('mark3')->default(0);
        $table->integer('mark4')->default(0);
        $table->integer('mark5')->default(0);
        $table->integer('marks_obtained')->default(0);
        $table->integer('total_marks')->default(0);
        $table->timestamps();
    });
}

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_results');
    }
};
