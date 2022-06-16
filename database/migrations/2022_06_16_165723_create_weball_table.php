<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeballTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weball', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id');
            $table->string('name');
            $table->string('nama_kategori');
            $table->string('file');
            $table->string('desc');
            $table->string('jenis');
            $table->string('status');
            $table->bigInteger('user_id');
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
        Schema::dropIfExists('weball');
    }
}
