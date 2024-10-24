<?php

use App\Models\Branch;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('inventory_assignments', function (Blueprint $table) {
        $table->id();
        $table->foreignId('inventory_id')->constrained('inventories')->onDelete('cascade');
        $table->foreignId('teacher_id')->constrained('teachers')->onDelete('cascade');
        $table->integer('quantity_assigned');
        $table->foreignIdFor(Branch::class)->onDelete('cascade');
        $table->date('assigned_on');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_assignments');
    }
};
