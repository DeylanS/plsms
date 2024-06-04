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
        Schema::create('draft_thesis', function (Blueprint $table) {
            $table->id('dt_id'); 
            $table->integer('dt_no'); 
            $table->string('dt_title'); 
            $table->date('dt_start_date');
            $table->date('dt_completion_date'); 
            $table->integer('dt_day_prepare');
            $table->integer('dt_total_page');
            $table->integer('dt_draft_cycle'); 
            $table->string('dt_feedback'); 
            $table->date('dt_feedback_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('draft_thesis');
    }
};
