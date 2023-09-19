<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Token;

class AuthController extends Controller{
    public function authenticate( $email ) {
        $token  = sha1( $email . date('Y-m-d H:i:s') . mt_rand(200, 500) );
        $expiry = Carbon::now()->addMinutes( 60 )->toDateTimeString();

        $token_saved = Token::create([
            'email' => $email,
            'token' => $token,
            'expiry' => $expiry
        ]);

        return !is_null($token_saved) ? $token : false;
    }
}