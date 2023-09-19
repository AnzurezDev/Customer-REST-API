<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Log;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\Response;

class LogResponse {
    public function handle( Request $request, Closure $next ) {
        // Procesar la solicitud y obtener la respuesta
        $response = $next( $request );

        // Verificar si la respuesta es una instancia de Response
        if ( $response instanceof Response && env('APP_DEBUG' ) ) {
            // Guardar los registros en la base de datos
            Log::insert([
                'ip_address'        => 'SERVER',
                'method'            => $request->method(),
                'url'               => $request->fullUrl(),
                'status_code'       => $response->getStatusCode(),
                'response_content'  => $response->getContent(),
                'created_at'        => Carbon::now()->toDateTimeString(),
                'updated_at'        => Carbon::now()->toDateTimeString(),
            ]);
        }

        // Devolver la respuesta original
        return $response;
    }
}
