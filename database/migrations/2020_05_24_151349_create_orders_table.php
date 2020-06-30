<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id');
            $table->foreignId('post_package_id');
            $table->foreignId('buyer_id');
            $table->unsignedInteger('price');
            $table->text('description')->nullable();
            $table->json('briefly_describe')->nullable();
            $table->json('delivery_item')->nullable();
            $table->unsignedInteger('delivery_time')->nullable();
            $table->unsignedInteger('fast_delivery_time')->nullable();
            $table->unsignedInteger('fast_delivery_price')->nullable();
            $table->unsignedInteger('revisions')->nullable();
            $table->text('remark')->nullable();
            $table->enum('status', ['pending_payment', 'paid', 'pending_approve', 'approved', 'pending_review', 'reviewed', 'pending_cancel', 'cancelled'])->nullable();
            $table->timestamps();

            $table->foreign('post_id')
                ->references('id')->on('posts')
                ->onDelete('cascade');

            $table->foreign('post_package_id')
                ->references('id')->on('post_packages')
                ->onDelete('cascade');

            $table->foreign('buyer_id')
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
        Schema::dropIfExists('orders');
    }
}
