<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosDeRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_de_roles', function (Blueprint $table) {
            $table->unsignedInteger('rol_id');
            $table->unsignedInteger('permiso_id');

            $table->foreign('rol_id')->references('Id')->on('rols')->onDelete('cascade');
            $table->foreign('permiso_id')->references('Id')->on('permisos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_de_roles');
    }
}
