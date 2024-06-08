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
        Schema::create('recargas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('idextintor');
            $table->date('proximarecarga');
            $table->unsignedBigInteger('user_id'); // Asegurarse de incluir esta línea
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idextintor')->references('id')->on('extintores')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Asegurarse de incluir esta línea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recargas');
    }
};
