<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cinema_id')->unsigned();
            $table->integer('movie_id')->unsigned();
            $table->integer('koltuk_sayisi')->unsigned()->default(50);
            $table->string('saat',250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seans');
    }
};
