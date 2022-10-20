<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermisosController extends Controller
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
     * Retornar la lista de permisos
     * @return Illuminate\Http\Response
     */
    public function index(){

    }


    /**
     * Crear la instancia de un nuevo permiso
     * @param Request Permiso
     * @return Illuminate\Http\Response
     */
    public function store(Request $request ){

    }


    /**
     * Retorna un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */
    public function show($idPermiso){

    }

    /**
     * Actualiza un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $idpermiso){

    }


    /**
     * Elimina un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */

     public function destroy($idPermiso){

     }
    
}
