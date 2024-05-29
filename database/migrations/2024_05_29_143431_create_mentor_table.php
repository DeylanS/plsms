<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mentor', function (Blueprint $table) {
            $table->id('Mentor_ID');
            $table->integer('User_ID')->unsigned();
            //$table->foreign('User_ID')->reference('User_ID')->on('user')->onUpdate('cascade')->onDelete('cascade');
            $table->string('Mentor_Staff');
            $table->timestamps();
        });

        Schema::table('mentor',  function(Blueprint $table){

            $table->foreign('User_ID')->references('User_ID')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
