<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up() {
    
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->text('about_me');
        $table->string('email');
        $table->string('phone');
        $table->string('location');
        $table->string('profile_image')->nullable();
        $table->timestamps();
    });

    // Table para sa Skills
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('skill_name');
        $table->integer('proficiency');
        $table->string('skill_link')->nullable(); 
        $table->timestamps();
    });

    
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('project_link')->nullable();
        $table->timestamps();
    });
}

    
    public function down(): void
    {
        Schema::dropIfExists('portfolio_data_tables');
    }
};
