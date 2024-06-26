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
        Schema::create('mentor', function (Blueprint $table) {
            $table->id('Mentor_ID');

            $table->unsignedBigInteger('User_ID');
 
            $table->foreign('User_ID')->references('User_ID')->on('user')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('Mentor_Position');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor');
    }
};
