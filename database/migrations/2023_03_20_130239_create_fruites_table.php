<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFruitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruites', function (Blueprint $table) {
            $table->id();
            $table->string('fruites_name',100)->nullable();
            $table->integer('price')->nullable();
            $table->string('image',100)->nullable();
            $table->string('description',100)->nullable();
            $table->timestamps();
        });

        Schema::create('fruites_shop', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('fruites_id')->nullable();
            $table->bigInteger('shop_id')->nullable();
    
           });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fruites');
        Schema::dropIfExists('fruite_shop');
    }
}
