<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
              ->references('id')->on('users')
              ->onDelete('cascade');
            $table->integer('provinsi_id')->unsigned();
            $table->foreign('provinsi_id')->references('id')
                    ->on('provinsis')
                    ->onDelete('cascade');
            $table->string('nama',255);
            // $table->integer('kabupaten_id')->unsigned();
            // $table->foreign('kabupaten_id')
            //   ->references('id')->on('kabupatens')
            //   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upps');
    }
}
