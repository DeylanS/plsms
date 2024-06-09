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
            $table->increments('id');
            $table->string('dt_title');
            $table->integer('dt_draft_number');
            $table->date('dt_start_date');
            $table->date('dt_complete_date');
            $table->date('dt_prep_days');
            $table->integer('dt_pages_number');
            $table->string('dt_ddc');
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


