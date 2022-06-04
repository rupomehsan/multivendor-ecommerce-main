<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('api_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('session_id')->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('shop_id')->nullable();
            $table->integer('recurring_id')->nullable();
            $table->string('client_id')->nullable();
            $table->json('option')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('price')->nullable();
            $table->json('color')->nullable();
            $table->json('size')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
