<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Log;
use Carbon\Carbon;

class LogRequest {
    public function handle( Request $request, Closure $next ) {
        // Procesar la solicitud y obtener la respuesta
        $response = $next( $request );

        // Guardar los registros en la base de datos
        Log::insert([
            'ip_address'        => $request->ip(),
            'method'            => $request->method(),
            'url'               => $request->fullUrl(),
            'status_code'       => $response->status(),
            'response_content'  => '',
            'created_at'        => Carbon::now()->toDateTimeString(),
            'updated_at'        => Carbon::now()->toDateTimeString(),
        ]);

        // Devolver la respuesta original
        return $response;
    }
}