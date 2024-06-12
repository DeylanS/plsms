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
        Schema::create('platinum', function (Blueprint $table) {
            $table->id('Platinum_ID');

            $table->unsignedBigInteger('User_ID');
 
            $table->foreign('User_ID')->references('User_ID')->on('user')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('Mentor_ID');

            $table->foreign('Mentor_ID')->references('Mentor_ID')->on('mentor')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('Platinum_Citizenship');
            $table->string('Platinum_CurrentEduLevel');
            $table->string('Platinum_EduField');
            $table->string('Platinum_EduInstitute');
            $table->string('Platinum_Occupation');
            $table->string('Platinum_StudySponsorship');
            $table->string('Platinum_Program');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('platinum');
    }
};
