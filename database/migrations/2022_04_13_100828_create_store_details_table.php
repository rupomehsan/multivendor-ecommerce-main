<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable();
            $table->string('store_name')->nullable();
            $table->string('address')->nullable();
            $table->text('opening_time')->nullable();
            $table->text('comments')->nullable();
            $table->string('ssl_url')->nullable();
            $table->string('store_url')->nullable();
            $table->text('description')->nullable();
            $table->text('meta_tag_title')->nullable();
            $table->text('meta_tag_desc')->nullable();
            $table->text('meta_tag_keyword')->nullable();
            $table->string('image')->nullable();
            $table->enum('status',['active',"inactive"])->default('active');
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
        Schema::dropIfExists('store_details');
    }
}
