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
    public function up(): void
    {
        Schema::create('noticeboards', function (Blueprint $table) {
            $table->id();
            
            // Notice details
            $table->string('title'); // Title of the notice
            $table->text('description'); // Detailed description of the notice
            $table->foreignId('author_id')->constrained('users')->onDelete('cascade'); // Who posted the notice (can be admin or teacher)
            $table->json('visibility')->nullable(); // Who can see the notice
            $table->date('expiry_date')->nullable(); // Optional expiry date for notices
            $table->foreignIdFor(Branch::class)->onDelete('cascade');
            
            // File attachments
            $table->json('attachment')->nullable(); // Attachment (optional)

            // Timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('noticeboards');
    }
};
