<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->string('sub_id')->nullable();
            $table->string('sub_name');
            $table->string('sub_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->rememberToken();    
            $table->timestamps();


            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onCascade('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
