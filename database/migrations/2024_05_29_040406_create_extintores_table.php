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
        Schema::create('extintores', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('capacidad');
            $table->string('estado');
            $table->date('fechafabricacion');
            $table->unsignedBigInteger('idproveedor');
            $table->unsignedBigInteger('idubicacion');
            $table->unsignedBigInteger('user_id'); // Agregar esta línea
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('idproveedor')->references('id')->on('proveedores')->onDelete('cascade');
            $table->foreign('idubicacion')->references('id')->on('ubicaciones')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); // Agregar esta línea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extintores');
    }
};
