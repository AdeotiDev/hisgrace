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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->default('Edusoft Schools');
            $table->text('caption')->nullable();
            $table->text('address')->nullable();
            $table->text('contact')->nullable();


            //Logo
            $table->string('logo')->nullable();

            //Favicon
            $table->string('favicon')->nullable();


            //SEO 
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();


            //Frontend
            $table->string('frontend_theme')->default('default');
            

            $table->timestamps();
        });
    }


    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
