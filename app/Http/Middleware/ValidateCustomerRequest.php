<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ValidateCustomerRequest {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( Request $request, Closure $next ) {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'dni'       => 'required|max:45|unique:customers',
            'id_reg'    => 'required',
            'id_com'    => 'required',
            'email'     => 'required|email|unique:customers|max:120',
            'name'      => 'required|max:45',
            'last_name' => 'required|max:45',
            'address'   => 'max:45',
            'status'    => 'in:A,I,trash',
        ]);

        if ( $validator->fails() ) {
            return response()->json( ['errors' => $validator->errors()], 422 );
        }

        return $next( $request );
    }
}
