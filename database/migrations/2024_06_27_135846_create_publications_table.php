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
        Schema::create('publications', function (Blueprint $table) {
            $table->id('Publication_ID');

            $table->unsignedBigInteger('Mentor_ID');
            $table->foreign('Mentor_ID')->references('Mentor_ID')->on('mentor')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('User_ID');
 
            $table->foreign('User_ID')->references('User_ID')->on('user')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->string('Publication_Field');
            $table->string('Publication_Title');
            $table->date('Publication_Date');
            $table->string('Publication_File');
            $table->string('Publication_Author');
            $table->string('Publication_Type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publications');
    }
};
