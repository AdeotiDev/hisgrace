<?php

use App\Models\SchoolClass;
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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->foreignIdFor(User::class)->onDelete('cascade');
        $table->foreignIdFor(SchoolClass::class)->onDelete('cascade');
        $table->string('parent_contact');
        $table->string('roll_number');
        $table->string('guardian_name');
        $table->string('guardian_phone');
        $table->date('admission_date');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
