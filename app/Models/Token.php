<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model{
    protected $table    = "auth_tokens";
    protected $fillable = [ 'email', 'token', 'expiry' ];

    // public $timestamps = false;
}