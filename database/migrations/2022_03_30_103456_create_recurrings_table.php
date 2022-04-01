<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurrings', function (Blueprint $table) {
            $table->id();
            $table->integer('language_id')->nullable();
            $table->string('name')->nullable();
            $table->decimal('price')->nullable();
            $table->enum('frequency',['day', 'week', 'semi_month', 'month', 'year'])->nullable();
            $table->integer('duration')->nullable();
            $table->integer('cycle')->nullable();
            $table->tinyInteger('trial_status')->nullable();
            $table->decimal('trial_price')->nullable();
            $table->enum('trial_frequency',['day', 'week', 'semi_month', 'month', 'year'])->nullable();
            $table->integer('trial_duration')->nullable();
            $table->integer('trial_cycle')->nullable();
            $table->integer('sort_order')->nullable();
            $table->enum('status',['active,inactive'])->nullable();
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
        Schema::dropIfExists('recurrings');
    }
}
