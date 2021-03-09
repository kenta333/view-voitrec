<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMatchingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_matching', function (Blueprint $table) {
              $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('matching_id');
            $table->timestamps();
            
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('matching_id')->references('id')->on('users')->onDelete('cascade');
            
            $table->unique(['user_id', 'matching_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_matching');
        
    }
}
