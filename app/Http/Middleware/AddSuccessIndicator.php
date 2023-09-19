<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AddSuccessIndicator {
    /**
     * Procesa una solicitud entrante antes de pasarla al siguiente middleware o controlador.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next ) {
        // Llama al siguiente middleware o controlador y obtiene la respuesta.
        $response = $next( $request );

        // Determina si la solicitud fue exitosa (código de estado HTTP 200).
        $success = $response->getStatusCode() == 200;

        // Crea una nueva estructura de datos para la respuesta.
        $newResponseData = array(
            'success'   => $success, // Indicador de éxito basado en el código de estado HTTP.
            'data'      => $response->getData(), // Datos originales de la respuesta.
        );

        // Asigna los nuevos datos a la respuesta.
        $response->setData( $newResponseData );

        // Retorna la respuesta modificada.
        return $response;
    }
}