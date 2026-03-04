<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {
    // Table para sa Profile Info (Home/About)
    Schema::create('profiles', function (Blueprint $table) {
        $table->id();
        $table->string('full_name');
        $table->text('about_me');
        $table->string('profile_image')->nullable();
        $table->string('email');
        $table->string('phone');
        $table->timestamps();
    });

    // Table para sa Skills
    Schema::create('skills', function (Blueprint $table) {
        $table->id();
        $table->string('skill_name');
        $table->integer('proficiency'); // halimbawa: 90 para sa 90%
        $table->timestamps();
    });

    // Table para sa Projects
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('project_link')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_data_tables');
    }
};
