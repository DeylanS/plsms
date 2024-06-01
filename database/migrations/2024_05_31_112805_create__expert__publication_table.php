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
        Schema::create('Expert_Publication', function (Blueprint $table) {
            $table->id('EP_ID');

            $table->unsignedBigInteger('Expert_ID');
 
            $table->foreign('Expert_ID')->references('Expert_ID')->on('expert')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('EP_PaperTitle');
            $table->integer('EP_PaperYear');
            $table->string('EP_PaperFile')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Expert_Publication');
    }
};
