<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model{
    protected $table        = "customers";
    protected $primaryKey   = 'dni';
    protected $keyType      = 'string';
    protected $fillable     = [ 'dni', 'id_reg', 'id_com', 'email', 'name', 'last_name', 'address', 'status', 'date_reg' ];
    public $incrementing    = false;
    public $timestamps      = false;

    public function commune() {
        return $this->belongsTo(Commune::class, 'id_com');
    }

    public function region() {
        return $this->belongsTo(Region::class, 'id_reg');
    }

    /**
     * Obtener todos los customers activos
     */
    public function getActives() {
        return self::select( 'customers.name', 'customers.last_name', 'customers.address', 'communes.description AS description_commune', 'regions.description AS description_region' )
                ->join( 'communes', 'communes.id_com', '=', 'customers.id_com' )
                ->join( 'regions', 'regions.id_reg', '=', 'communes.id_reg' )
                ->where( 'customers.status', 'A' )
                ->get();
    }

    /**
     * Buscar customers activos por dni o email
     *
     * @param string $search Representa el dni o el email
     */
    public function getActivesBySearch( $search ) {
        return self::select( 'customers.name', 'customers.last_name', 'customers.address', 'communes.description AS description_commune', 'regions.description AS description_region' )
                ->join( 'communes', 'communes.id_com', '=', 'customers.id_com' )
                ->join( 'regions', 'regions.id_reg', '=', 'communes.id_reg' )
                ->where( 'customers.status', 'A' )
                ->where(
                    function ( $query ) use ( $search ) {
                        $query->where( 'customers.dni', $search )->orWhere( 'customers.email', $search );
                    }
                )
                ->get();
    }
}