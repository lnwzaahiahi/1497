<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('sub_category_id');
            $table->string('title');
            $table->text('description_1')->nullable();
            $table->text('description_2')->nullable();
            $table->json('briefly_describe')->nullable();
            $table->json('frequently_ask')->nullable();
            $table->json('requirements')->nullable();
            $table->enum('status', ['draft', 'saved', 'pending', 'publish', 'deleted'])->nullable();
            $table->timestamp('published_at', 0)->nullable();
            $table->enum('type', ['post', 'work'])->nullable();
            $table->enum('visibility', ['public', 'follower','only_me'])->nullable();
            $table->json('hashtag')->nullable();
            $table->unsignedInteger('views')->nullable();
            $table->unsignedInteger('solds')->nullable();
            $table->unsignedInteger('interested')->nullable();
            $table->unsignedInteger('succeed')->nullable();
            $table->unsignedInteger('failed')->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('sub_category_id')
                ->references('id')->on('sub_categories')
                ->onDelete('cascade');

            $table->foreign('user_id')
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
        Schema::dropIfExists('posts');
    }
}
