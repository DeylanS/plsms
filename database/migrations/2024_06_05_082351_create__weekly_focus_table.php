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
        Schema::create('weekly_focus', function (Blueprint $table) {
            $table->increments('WF_ID');
            $table->date('WF_StartDate')->default(now()); // Set default value to current date
            $table->date('WF_CompleteDate');
            $table->string('WF_FocusInfo');
            $table->string('WF_AdminInfo');
            $table->string('WF_SocialInfo');
            $table->string('WF_RecoveryInfo');
            $table->string('WF_Feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_focus');
    }
};

