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
        Schema::create('platinums', function (Blueprint $table) {
            $table->id('platinum_id'); 
            $table->string('platinum_citizenship'); 
            $table->string('platinum_current_edu_level'); 
            $table->string('platinum_edu_field'); 
            $table->string('platinum_edu_institute'); 
            $table->string('platinum_occupation'); 
            $table->string('platinum_sponsorship');
            $table->string('platinum_program'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinums');
    }
};
