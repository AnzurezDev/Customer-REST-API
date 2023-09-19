<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model{
    protected $table        = "regions";
    protected $primaryKey   = 'id_reg';
    protected $fillable     = [ 'description', 'status' ];
    public $timestamps      = false;
}