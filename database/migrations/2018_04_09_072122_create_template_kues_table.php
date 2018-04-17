<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateKuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_kues', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pertanyaan',255);
            $table->integer('unsur_id')->unsigned();
            $table->foreign('unsur_id')->references('id')->on('unsurs')->onDelete('cascade');
            // $table->integer('kabupaten_id')->unsigned();
            // $table->foreign('kabupaten_id')->references('id')
            //         ->on('kabupatens')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template_kues');
    }
}
