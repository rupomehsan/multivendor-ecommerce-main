<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('invoice_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->float('cost')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->float('sell')->nullable();
            $table->bigInteger('item_tax')->nullable();
            $table->bigInteger('item_total')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('purchase_products');
    }
}
