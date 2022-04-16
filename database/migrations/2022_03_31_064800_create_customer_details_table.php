<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id")->nullable();
            $table->integer("customer_group_id")->nullable();
            $table->integer("store_id")->nullable();
            $table->integer("language_id")->nullable();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("fax")->nullable();
            $table->text("wishlist")->nullable();
            $table->tinyInteger("newsletter")->nullable();
            $table->string("address")->nullable();
            $table->string("custom_field")->nullable();
            $table->string("ip")->nullable();
            $table->string("token")->nullable();
            $table->tinyInteger("safe")->nullable();
            $table->string("code")->nullable();
            $table->string("company_name")->nullable();
            $table->string("website")->nullable();
            $table->string("tracking_code")->nullable();
            $table->string("commission")->nullable();
            $table->integer("tax_id")->nullable();
            $table->string("payment_method")->nullable();
            $table->string("cheque_payee_name")->nullable();
            $table->enum("status",['active',"inactive"])->nullable();
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
        Schema::dropIfExists('customer_details');
    }
}
