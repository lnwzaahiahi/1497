<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_follow', function (Blueprint $table) {
            $table->id();
            $table->foreignId('follower_id');
            $table->foreignId('following_id');
            $table->enum('status', ['followed','unfollowed'])->nullable();
            $table->timestamps();

            $table->foreign('follower_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('following_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_follow');
    }
}
