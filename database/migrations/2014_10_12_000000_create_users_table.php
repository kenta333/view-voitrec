<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('old')->nullable();
            $table->string('free')->default("はじめまして。これからよろしくお願いします。");
            $table->string('gender')->nullable();
            $table->string('like')->nullable();
            $table->integer('type');
            $table->rememberToken();
            $table->timestamps();
            $table->string('file')->default("/voiceicon2.jpg");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
