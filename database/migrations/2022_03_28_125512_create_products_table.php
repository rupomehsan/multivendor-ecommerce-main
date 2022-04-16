<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('language_id')->nullable();
            $table->integer('vendors_id')->nullable();
            $table->text('description')->nullable();
            $table->string('product_code')->nullable();
            $table->string('tag')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('model')->nullable();
            $table->string('sku')->nullable();
            $table->string('upc')->nullable();
            $table->string('jan')->nullable();
            $table->string('isbn')->nullable();
            $table->string('mpn')->nullable();
            $table->string('location')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('stock_status_id')->nullable();
            $table->integer('brand_id')->nullable();
            $table->tinyInteger('shipping')->nullable();
            $table->decimal('price')->nullable();
            $table->integer('points')->nullable();
            $table->integer('tax_class_id')->nullable();
            $table->date('date_available')->nullable();
            $table->decimal('weight')->nullable();
            $table->integer('weight_class_id')->nullable();
            $table->decimal('length')->nullable();
            $table->decimal('width')->nullable();
            $table->integer('height')->nullable();
            $table->integer('length_class_id')->nullable();
            $table->tinyInteger('subtract')->nullable();
            $table->integer('minimum')->nullable();
            $table->integer('sort_order')->nullable();
            $table->json('category_id')->nullable();
            $table->integer('filter_id')->nullable();
            $table->json('related_product_id')->nullable();
            $table->json('attributes')->nullable();
            $table->json('option')->nullable();
            $table->json('recurring')->nullable();
            $table->json('discount')->nullable();
            $table->json('special')->nullable();
            $table->json('reward_point')->nullable();
            $table->json('seo_keywords')->nullable();
            $table->json('design')->nullable();
            $table->integer('viewed')->nullable();
            $table->json('image')->nullable();
            $table->enum('status',['active','inactive'])->nullable()->default('active');
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
        Schema::dropIfExists('products');
    }
}
