<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Controllers\AuthController;

class UserController extends Controller{
    public function store( Request $request ) {
        $input = $request->all();
        $input[ 'password' ] = Hash::make( $request->password );
        $user = User::create( $input );

        if ( !is_null($user) ) {
            return response()->json( $user );
        }

        return response()->json( ['message' => 'Error al registrar el usuario.'], 422 );
    }

    public function login( Request $request ) {
        $user = User::whereEmail( $request->email )->where( 'status', 'A' )->first();

        if ( !is_null($user) && Hash::check($request->password, $user->password) ) {
            $auth   = new AuthController();
            $token  = $auth->authenticate( $request->email );

            if ( $token ) {
                return response()->json([
                    'token' => $token,
                    'message' => 'Acceso correcto'
                ]);
            }

            return response()->json( ['message' => 'Ocurrió un error al generar el token'], 500);
        }

        return response()->json( ['message' => 'Acceso denegado'], 401 );
    }
}