<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     //ESTRUCTURA DE TABLA PARA CREAR ROL USUARIO
     
    public function up()
    {
        Schema::create('rol_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_usuario', function (Blueprint $table) {                     
            $table->dropConstrainedForeignId('id_rol');  
            $table->dropConstrainedForeignId('id_usuario');
          
        });
    }
}
