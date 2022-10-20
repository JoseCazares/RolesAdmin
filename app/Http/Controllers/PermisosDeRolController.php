<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisosDeRolController extends Controller
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
     * Retornar la lista de Roles con sus permisos
     * @return Illuminate\Http\Response
     */
    public function index(){

    }


    /**
     * Asigna los permisos a un rol establecido
     * @param Request Rol
     * @return Illuminate\Http\Response
     */
    public function store(Request $request){

    }

    /**
     * Elimina un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */

     public function destroy($idPermiso){

     }
    
}
