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
        Schema::create('Expert', function (Blueprint $table) {
            $table->id('Expert_ID');
            $table->string('Expert_Name');
            $table->string('Expert_Gender');
            $table->string('Expert_University');
            $table->string('Expert_Email');
            $table->string('Expert_PhoneNum')->nullable();
            $table->string('Expert_ResearchField');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Expert');
    }
};
