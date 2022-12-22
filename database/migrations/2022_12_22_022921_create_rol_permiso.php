<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolPermiso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permiso', function (Blueprint $table) {


            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('roles')->onDelete('cascade');
            $table->unsignedBigInteger('id_permisos');
            $table->foreign('id_permisos')->references('id')->on('permisos')->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rol_permiso', function (Blueprint $table) {                     
            $table->dropConstrainedForeignId('id_rol');  
            $table->dropConstrainedForeignId('id_permisos');
          
        });
    }
}
