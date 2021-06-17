<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id('userId');
            $table->string('userName');
            $table->string('email');
            $table->string('fullName')->nullable();
            $table->string('bio')->nullable();
            $table->string('github')->nullable();
            $table->string('twitter')->nullable();
            $table->string('insta')->nullable();
            $table->string('facebook')->nullable();
            $table->json('friends')->nullable();
            $table->json('follow')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
