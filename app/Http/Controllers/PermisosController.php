<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermisosController extends Controller
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
     * Retornar la lista de permisos
     * @return Illuminate\Http\Response
     */
    public function index(){

        return $this->successResponse(Permiso::all());
    }


    /**
     * Crear la instancia de un nuevo permiso
     * @param Request Permiso
     * @return Illuminate\Http\Response
     */
    public function store(Request $request ){
        $rules = [
            'Nombre' => 'required|max:30'
        ];

        $this->validate($request, $rules);

        $permiso = Permiso::create($request->all());

        return $this->successResponse($permiso, Response::HTTP_CREATED);
    }

    /**
     * Actualiza un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $rules = [
            'Nombre' => 'required|max:30'
        ];

        $this->validate($request, $rules);

        $permiso = Permiso::findOrFail($id);

        $permiso->fill($request->all());

        if($permiso->isClean()){
            return $this->errorResponse('Al menos un valor debe ser modificado', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $permiso->save();

        return $this->successResponse($permiso);
    }


    /**
     * Elimina un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */

     public function destroy($id){
        $rol = Permiso::where('Id', $id)->firstOrFail();

        $rol->destroy($id);

        return $this->customResponse('Permiso eliminado correctamente', Response::HTTP_GONE);

     }
    
}
