<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Customer;

class ValidateCustomer {
    public function handle( Request $request, Closure $next ) {
        $dni        = $request->route( 'dni' );
        $validation = Customer::where( 'dni', $dni )->where(
                        function ( $query ) {
                            $query->where( 'status', 'A' )->orWhere( 'status', 'I' );
                        }
                      )->first();

        if ( $validation ) {
            return $next( $request );
        }

        return response()->json( 'Registro no existe', 422 );
    }
}
