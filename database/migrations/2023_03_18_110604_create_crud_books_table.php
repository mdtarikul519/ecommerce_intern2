<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud_books', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable();
            $table->string('author',100)->nullable();
            $table->string('image',100)->nullable();
            $table->string('publiser',100)->nullable();
            $table->timestamps();
        });

        Schema::create('crud_book_crud_publication', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('crud_book_id')->nullable();
            $table->bigInteger('crud_publicatio_id')->nullable();
    
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crud_books');
        Schema::dropIfExists('crud_book_crud_publication');
    }
}
