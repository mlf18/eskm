<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRespondensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('respondens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->string('nama',255);
            $table->string('kabupaten');
            $table->integer('umur');
            $table->string('pendidikan',100);
            $table->string('pekerjaan',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('respondens');
    }
}
