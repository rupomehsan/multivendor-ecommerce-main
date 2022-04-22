<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string("name")->nullable();
            $table->string("code_name")->nullable();
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->string("address")->nullable();
            $table->string("city")->nullable();
            $table->string("state")->nullable();
            $table->string("country")->nullable();
            $table->json("store")->nullable();
            $table->text("details")->nullable();
            $table->json("image")->nullable();
            $table->enum('status',['active','inactive']);
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
        Schema::dropIfExists('suppliers');
    }
}
