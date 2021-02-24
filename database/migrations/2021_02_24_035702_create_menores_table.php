<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menores', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('registro_civil');
            $table->date('fecha_nacimiento');
            $table->string('ciudad');
            $table->string('direccion');
            $table->unsignedBigInteger('alergia_id')->nullable();
            $table->unsignedBigInteger('acudiente_id')->nullable();
            $table->foreign('alergia_id')->references('id')->on('alergias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('acudiente_id')->references('id')->on('acudientes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('menores');
    }
}
