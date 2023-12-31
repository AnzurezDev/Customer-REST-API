<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesTable extends Migration{

    public function up(){
        Schema::create('communes', function (Blueprint $table) {
            $table->integer( 'id_com' );
            $table->integer( 'id_reg' );
            $table->string( 'description', 90 );
            $table->enum( 'status', ['A', 'I', 'trash'] )->default( 'A' );
            $table->primary( ['id_com', 'id_reg'] );
            $table->index( 'id_reg' );
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'MyISAM';
        });
    }

    public function down(){
        Schema::dropIfExists( 'communes' );
    }
}