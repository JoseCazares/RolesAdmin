<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Retornar la lista de Roles
     * @return Illuminate\Http\Response
     */
    public function index(){

    }


    /**
     * Crear la instancia de un nuevo Rol
     * @param Request Rol
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }


    /**
     * Retorna un rol en especifico
     * @param int $idRol
     * @return Illuminate\Http\Response
     */
    public function show($idRol){

    }

    /**
     * Actualiza un permiso en especifico
     * @param int $idRol
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $idRol){

    }


    /**
     * Elimina un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */

     public function destroy($idPermiso){

     }
    
}
