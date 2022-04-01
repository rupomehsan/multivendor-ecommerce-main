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
            $table->integer('invoice_no')->nullable();
            $table->string('invoice_prefix')->nullable();
            $table->integer('store_id')->nullable();
            $table->string('store_name')->nullable();
            $table->string('store_url')->nullable();
            $table->integer('customer_id')->nullable();
            $table->integer('customer_group_id')->nullable();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->json('custom_field')->nullable();
            $table->string('payment_firstname')->nullable();
            $table->string('payment_lastname')->nullable();
            $table->string('payment_company')->nullable();
            $table->string('payment_address_1')->nullable();
            $table->string('payment_address_2')->nullable();
            $table->string('payment_city')->nullable();
            $table->string('payment_postcode')->nullable();
            $table->string('payment_country')->nullable();
            $table->integer('payment_country_id')->nullable();
            $table->string('payment_zone')->nullable();
            $table->integer('payment_zone_id')->nullable();
            $table->json('payment_address_format')->nullable();
            $table->json('payment_custom_field')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('payment_code')->nullable();
            $table->string('shipping_firstname')->nullable();
            $table->string('shipping_lastname')->nullable();
            $table->string('shipping_company')->nullable();
            $table->string('shipping_address_1')->nullable();
            $table->string('shipping_address_2')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_postcode')->nullable();
            $table->string('shipping_country')->nullable();
            $table->integer('shipping_country_id')->nullable();
            $table->string('shipping_zone')->nullable();
            $table->integer('shipping_zone_id')->nullable();
            $table->json('shipping_address_format')->nullable();
            $table->json('shipping_custom_field')->nullable();
            $table->string('shipping_method')->nullable();
            $table->string('shipping_code')->nullable();
            $table->text('comment')->nullable();
            $table->decimal('total')->nullable();
            $table->integer('order_status_id')->nullable();
            $table->integer('affiliate_id')->nullable();
            $table->decimal('commission')->nullable();
            $table->integer('marketing_id')->nullable();
            $table->string('tracking')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('currency_code')->nullable();
            $table->decimal('currency_value')->nullable();
            $table->string('ip')->nullable();
            $table->string('forwarded_ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->string('accept_language')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
