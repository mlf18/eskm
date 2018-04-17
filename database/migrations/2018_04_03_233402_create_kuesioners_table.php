<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKuesionersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuesioners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('upp_id')->unsigned();
            $table->foreign('upp_id')->references('id')->on('upps')->onDelete('cascade');
            $table->string('pertanyaan',255);
            $table->string('kategori',255);
            $table->integer('unsur_id')->unsigned();
            $table->foreign('unsur_id')->references('id')->on('unsurs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kuesioners');
    }
}
