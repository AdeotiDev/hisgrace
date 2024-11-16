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
        Schema::create('result_uploads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('result_root_id')->constrained('result_roots')->onDelete('cascade');
            $table->foreignId('subject_id')->constrained('subjects')->onDelete('cascade');
            $table->json('file_path'); 
            $table->json('card_items')->default(json_encode([]));
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade');  

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_uploads');
    }
};
