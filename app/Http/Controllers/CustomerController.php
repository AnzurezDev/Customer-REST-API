<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Commune;
use App\Models\Region;
use Carbon\Carbon;

class CustomerController extends Controller{
    public function index() {
        $customer = new Customer();
        return response()->json( $customer->getActives() );
    }

    public function get( $search ) {
        $customer = new Customer();
        $response = $customer->getActivesBySearch( $search );

        if ( $response->count() > 0 ) {
            return response()->json( $response );
        }

        return response()->json( ['message' => 'Cliente no encontrado.'], 422 );
    }

    public function store( Request $request ) {
        $customer = new Customer;

        $customer->dni          = $request->dni;
        $customer->id_reg       = $request->id_reg;
        $customer->id_com       = $request->id_com;
        $customer->email        = $request->email;
        $customer->name         = $request->name;
        $customer->last_name    = $request->last_name;
        $customer->date_reg     = Carbon::now()->toDateTimeString();

        if ( $request->address ) {
            $customer->address = $request->address;
        }

        if ( $request->status ) {
            $customer->status = $request->status;
        }

        $customer->save();

        if ( !is_null($customer) ) {
            return response()->json( $customer );
        }

        return response()->json( ['message' => 'Error al registrar el cliente.'], 422 );
    }

    public function delete( $dni ) {
        $response   = Customer::where( 'dni', $dni )->update( ['status' => 'trash'] );
        return $response ? response()->json( ['message' => 'Registro eliminado.'] ) : response()->json( ['message' => 'El registro no fue eliminado.'], 422 );
    }
}