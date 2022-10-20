<?php

namespace App\Http\Controllers;

use App\Models\PermisosDelRol;
use App\Models\Rol;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermisosDeRolController extends Controller
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
     * Retornar la lista de Roles con sus permisos
     * @return Illuminate\Http\Response
     */
    public function index($id)
    {
        $response = Rol::select('permisos.Nombre')->join(
            'permisos_de_roles',
            'rols.Id',
            '=',
            'permisos_de_roles.rol_id'
        )->where('rols.id', $id)
            ->join('permisos', 'permisos.Id', '=', 'permisos_de_roles.permiso_id')->get();

        return $this->successResponse($response, Response::HTTP_FOUND);
    }


    public function store(Request $request)
    {
        $rules = [
            'rol_id' => 'required|integer',
            'permiso_id' => 'required|integer'
        ];

        $this->validate($request, $rules);

        $rol = PermisosDelRol::create($request->all());

        return $this->successResponse($rol, Response::HTTP_CREATED);
    }

    /**
     * Asigna los permisos a un rol establecido
     * @param Request Rol
     * @return Illuminate\Http\Response
     */
    public function bulkStore(Request $request, $id)
    {

        $rules = [
            '*.permiso_id' => 'required|integer'

        ];

        $this->validate($request, $rules);

        //Obtener los permisos del rol del id
        $permisos = $this->PrepararArray(
            json_decode(json_encode(
                PermisosDelRol::select('permiso_id')
                ->where('rol_id', $id)
                ->get()
            ))
        );

        //verificamos por cada transaccion mandada
        foreach ($request->all() as $k){
            $rolid = $k['permiso_id'];

            if(in_array($rolid, $permisos)){
                return $this->errorResponse('Uno o más permisos ya están asignados', Response::HTTP_UNPROCESSABLE_ENTITY);
            }
        }

        PermisosDelRol::insert($request->all());

        return $this->customResponse('Todos los datos se han añadido');
    }

    /**
     * Elimina un permiso en especifico
     * @param int $idPermiso
     * @return Illuminate\Http\Response
     */

    public function destroy(Request $request, $id)
    {
        $rules = [
            'permiso_id' => 'required|integer'
        ];

        $this->validate($request, $rules);


        $permisos_del_rol = PermisosDelRol::where('rol_id', $request['rol_id'])->where('permiso_id', $request['permiso_id'])->get();

        $permisos_del_rol->destroy();

        return $this->customResponse('Todos los permisos han sido revocados', Response::HTTP_GONE);
    }

    private function PrepararArray($arr){
        $response = [];
        foreach ($arr as $k){
            array_push($response, $k->permiso_id);
        }

        return $response;
    }
}
