<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studenteds', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('department', 100)->nullable();
            $table->string('registation', 100)->nullable();
            $table->string('image', 100)->nullable();
            $table->timestamps();
        });

        Schema::create('exam_studented', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exam_id')->nullable();
            $table->bigInteger('studented_id')->nullable();
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
        Schema::dropIfExists('studenteds');
        Schema::dropIfExists('exam_studented');
    }
}
