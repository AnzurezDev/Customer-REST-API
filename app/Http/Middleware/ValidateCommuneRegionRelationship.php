<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Commune;
use App\Models\Region;

class ValidateCommuneRegionRelationship {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle( $request, Closure $next ) {
        // Verificar que las identificaciones existen y tienen relaciones
        $commune = Commune::find( $request->id_com );

        if ( !is_null($commune) ) {
            $region     = Region::find( $commune->id_reg );

            // Validar la relación entre comuna y región
            $validation = !is_null( $region ) && $commune->id_reg==$request->id_reg;

            if ( $validation ) {
                return $next( $request );
            }
        }

        return response()->json( ['error' => 'La comuna y la región no están correctamente relacionadas o no existen.'], 422 );
    }
}
