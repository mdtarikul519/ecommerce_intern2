<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_publications', function (Blueprint $table) {
            $table->id();
            $table->string('name',100)->nullable();
            $table->string('address',100)->nullable();
            $table->integer('phon_number')->nullable();
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
        Schema::dropIfExists('crud_publications');
    }
}
