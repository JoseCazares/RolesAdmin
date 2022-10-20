<?php
namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{

    /**
     * Construyendo una respuesta de exito
     * @param string|array $data
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }

    /**
     * Construyendo una respuesta de error
     * @param string $mensaje
     * @param int $code
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($mensaje, $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        return response()->json(
            [
                'error' => $mensaje,
                'code' => $code
            ], $code);
    }

    public function customResponse($mensaje, $code = Response::HTTP_OK){

        return response()->json(['Mensaje' => $mensaje],$code);
    }
}