<?php

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
    Schema::create('role_user', function (Blueprint $table) {
        $table->foreignIdFor(User::class)->onDelete('cascade');
        $table->foreignId('role_id')->constrained('roles')->onDelete('cascade');
        $table->primary(['user_id', 'role_id']);
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_users');
    }
};
