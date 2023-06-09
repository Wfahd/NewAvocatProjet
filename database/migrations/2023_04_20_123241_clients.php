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
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastName');
            $table->string('email');
            $table->string('phone');
            $table->string('sex');
            $table->string('status');
            $table->string('titleOfTheCase');
             $table->timestamps();
             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')->references('id')->on('users');
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
