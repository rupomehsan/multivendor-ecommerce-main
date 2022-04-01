<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_ads', function (Blueprint $table) {
            $table->id();
            $table->string('ad_type');
            $table->enum('status',['on','off'])->nullable();
            $table->string('banner_id')->nullable();
            $table->string('banner_link')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('interesticial_id')->nullable();
            $table->string('interesticial_link')->nullable();
            $table->string('interesticial_image')->nullable();
            $table->integer('interesticial_click')->nullable();
            $table->string('native_id')->nullable();
            $table->string('native_link')->nullable();
            $table->string('native_image')->nullable();
            $table->integer('native_per_product')->nullable();
            $table->string('startup_id')->nullable();
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
        Schema::dropIfExists('mobile_ads');
    }
}
