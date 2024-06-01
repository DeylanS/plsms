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
        Schema::create('staff', function (Blueprint $table) {
            $table->id('Staff_ID');

            $table->unsignedBigInteger('User_ID');
 
            $table->foreign('User_ID')->references('User_ID')->on('user')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->unsignedBigInteger('Mentor_ID');

            $table->foreign('Mentor_ID')->references('Mentor_ID')->on('mentor')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('Staff_Position');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
