<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('date')->nullable();
            $table->string('ref_no')->nullable();
            $table->text('note')->nullable();
            $table->json('image')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('created_by')->nullable();
            $table->bigInteger('cost')->nullable();
            $table->bigInteger('sub_total')->nullable();
            $table->bigInteger('order_tax')->nullable();
            $table->bigInteger('shipping_charge')->nullable();
            $table->bigInteger('other_charge')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('paid_amount')->nullable();
            $table->bigInteger('due_amount')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->bigInteger('sell_price')->nullable();
            $table->bigInteger('item_tax')->nullable();
            $table->bigInteger('quantity')->nullable();
            $table->string('invoice_id')->nullable();
            $table->string('available_stock')->nullable();
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
        Schema::dropIfExists('purchase');
    }
}
