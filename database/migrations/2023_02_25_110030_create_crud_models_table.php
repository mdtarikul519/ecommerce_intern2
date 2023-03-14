<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_models', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('Description')->nullable();
            $table->string('hobby')->nullable();
            $table->string('gender')->nullable();
            $table->string('role')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('creator')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('status')->default();
          
            $table->timestamps();
        });

        Schema::create('crud_model_hobby', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crud_model_id')->nullable();
            $table->bigInteger('hobby_id')->nullable();

        });

        Schema::create('crud_model_role', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crud_model_id')->nullable();
            $table->bigInteger('role_id')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crud_models');
        Schema::dropIfExists('crud_model_hobby');
    }
}
