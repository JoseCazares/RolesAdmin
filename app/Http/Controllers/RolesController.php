<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RolesController extends Controller
{
    use ApiResponser;
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
    public function index()
    {
        $roles = Rol::all();

        return $this->successResponse($roles);
    }


    /**
     * Crear la instancia de un nuevo Rol
     * @param Request Rol
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'NombreRol' => 'required|max:30',
            'Descripcion' => 'required|max:255'
        ];

        $this->validate($request, $rules);

        $rol = Rol::create($request->all());

        return $this->successResponse($rol, Response::HTTP_CREATED);
    }

    /**
     * Retorna un rol en especifico
     * @param int $idRol
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        $rol = Rol::findOrFail($id);

        return $this->successResponse($rol, Response::HTTP_FOUND);
    }

   
    public function update(Request $request, $id)
    {

        $rules = [
            'NombreRol' => 'required|max:30',
            'Descripcion' => 'required|max:255'
        ];

        $this->validate($request, $rules);

        $rol = Rol::findOrFail($id);

        $rol->fill($request->all());

        if($rol->isClean()){
            return $this->errorResponse('Al menos un valor debe ser modificado', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $rol->save();

        return $this->successResponse($rol);
    }


    /**
     * Elimina un permiso en especifico
     * @param int $id
     * @return Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $rol = Rol::where('Id', $id)->firstOrFail();

        $rol->destroy($id);

        return $this->customResponse('Rol eliminado correctamente', Response::HTTP_GONE);
    }
}
