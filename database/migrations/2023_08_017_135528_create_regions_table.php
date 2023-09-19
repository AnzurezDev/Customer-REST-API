<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionsTable extends Migration{

    public function up(){
        Schema::create('regions', function (Blueprint $table) {
            $table->integer( 'id_reg' )->primary();
            $table->string( 'description', 90 );
            $table->enum( 'status', ['A', 'I', 'trash'] )->default( 'A' );
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';
            $table->engine = 'MyISAM';
        });
    }

    public function down(){
        Schema::dropIfExists( 'regions' );
    }
}