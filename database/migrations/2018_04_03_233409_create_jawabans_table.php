<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJawabansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawabans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('responden_id')->unsigned();
            $table->foreign('responden_id')->references('id')->on('respondens')->onDelete('cascade');
            $table->integer('kuesioner_id')->unsigned();
            $table->foreign('kuesioner_id')->references('id')->on('kuesioners')->onDelete('cascade');
            $table->string('kinerja',255);
            $table->string('kepentingan',255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jawabans');
    }
}
