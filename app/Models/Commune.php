<?php   
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Commun;

class Commune extends Model{
    protected $table        = "communes";
    protected $primaryKey   = 'id_com';
    protected $fillable     = [ 'id_reg', 'description', 'status' ];
    public $timestamps      = false;

    public function region() {
        return $this->belongsTo( Region::class, 'id_reg' );
    }
}