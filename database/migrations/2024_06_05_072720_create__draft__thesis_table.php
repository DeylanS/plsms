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
        Schema::create('Draft_Thesis', function (Blueprint $table) {
            $table->increments('DT_ID');
            $table->string('DT_Title');
            $table->integer('DT_DraftNumber');
            $table->date('DT_StartDate');
            $table->date('DT_EndDate');
            $table->string('DT_draftFile')->nullable();
            $table->integer('DT_PagesNumber');
            $table->string('DT_Feedback');
            $table->string('DT_TotalPages');
            $table->string('DT_PrepDays');
            $table->integer('DT_DDC');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Draft_Thesis');
    }
};
