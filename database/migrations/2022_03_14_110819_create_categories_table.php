<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('meta_tag_title')->nullable();
            $table->string('meta_tag_desc')->nullable();
            $table->string('meta_tag_keyword')->nullable();
            $table->integer('parent_id')->nullable();
            $table->tinyInteger('top')->nullable();
            $table->integer('column')->nullable();
            $table->integer('sort_order')->nullable();
            $table->integer('filter_id')->nullable();
            $table->integer('path_id')->nullable();
            $table->integer('store_id')->nullable();
            $table->integer('layout_id')->nullable();
            $table->json('image')->nullable();
            $table->string('keyword')->nullable();
            $table->string('status')->nullable()->default('active');
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
        Schema::dropIfExists('categories');
    }
}
