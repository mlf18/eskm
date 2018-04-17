<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpdkabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opdkabupatens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->integer('kabupaten_id')->unsigned();
            $table->foreign('kabupaten_id')->references('id')
                    ->on('kabupatens')
                    ->onDelete('cascade');
            $table->string('nama',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opdkabupatens');
    }
}
