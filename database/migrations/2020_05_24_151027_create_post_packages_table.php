<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id');
            $table->string('title', 50);
            $table->text('description')->nullable();
            $table->unsignedInteger('price');
            $table->json('delivery_item')->nullable();
            $table->unsignedInteger('delivery_time')->nullable();
            $table->unsignedInteger('fast_delivery_time')->nullable();
            $table->unsignedInteger('fast_delivery_price')->nullable();
            $table->unsignedInteger('revisions')->nullable();
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')->on('posts')
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
        Schema::dropIfExists('post_packages');
    }
}
