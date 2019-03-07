<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForInstal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('for_instal', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });
        Schema::create('film', function (Blueprint $table) {
            $table->increments('id_film');
            $table->integer('id_kategori');
            $table->String('judul_film');
            $table->integer('tahun_rilis');
        });
    
    Schema::create('members', function (Blueprint $table) {
            $table->integer('id_members');
            $table->string('nama_members');
            $table->integer('umur');
            $table->string('alamat');
        });
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('for_instal');
    }
}
