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
        Schema::create('user', function (Blueprint $table) {
            $table->id('User_ID');
            $table->string('User_Title');
            $table->string('User_FullName');
            $table->string('User_IC');
            $table->string('User_Gender');
            $table->string('User_Religion');
            $table->string('User_Race');
            $table->string('User_Address');
            $table->string('User_City');
            $table->string('User_State');
            $table->string('User_Postcode');
            $table->string('User_Country');
            $table->string('User_PhoneNumber');
            $table->string('User_Email');
            $table->string('User_FacebookName');
            $table->string('User_Password');
            $table->string('User_Type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
