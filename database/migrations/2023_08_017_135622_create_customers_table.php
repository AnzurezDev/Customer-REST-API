<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration{
    
    public function up(){
        Schema::create('customers', function (Blueprint $table) {
            $table->string( 'dni', 45 );
            $table->integer( 'id_reg' );
            $table->integer( 'id_com' );
            $table->string( 'email', 120 )->unique();
            $table->string( 'name', 45 );
            $table->string( 'last_name', 45 );
            $table->string( 'address', 255 )->nullable();
            $table->enum( 'status', ['A', 'I', 'trash'] )->default( 'A' );
            $table->dateTime( 'date_reg' );
            $table->primary( ['dni', 'id_com', 'id_reg'] );
            $table->index( 'id_com' );
            $table->index( 'id_reg' );
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'MyISAM';
        });
    }

    public function down(){
        Schema::dropIfExists( 'customers' );
    }
}