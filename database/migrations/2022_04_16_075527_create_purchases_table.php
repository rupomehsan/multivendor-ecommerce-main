<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('supplier_id')->nullable();
            $table->bigInteger('product_id')->nullable();
            $table->string('date')->nullable();
            $table->string('invoice_id')->nullable();
            $table->text('note')->nullable();
            $table->json('image')->nullable();
            $table->bigInteger('sub_total')->nullable();
            $table->bigInteger('grand_total')->nullable();
            $table->bigInteger('order_tax')->nullable();
            $table->bigInteger('shipping_charge')->nullable();
            $table->bigInteger('other_charge')->nullable();
            $table->bigInteger('discount')->nullable();
            $table->bigInteger('paid_amount')->nullable();
            $table->bigInteger('due_amount')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('created_by')->nullable();
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
        Schema::dropIfExists('purchases');
    }
}
