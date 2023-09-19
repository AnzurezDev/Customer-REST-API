<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogsTable  extends Migration{
    
    public function up(){
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
            $table->string( 'ip_address', 15 );
            $table->string( 'method', 6 );
            $table->string( 'url' );
            $table->integer( 'status_code' );
            $table->text( 'response_content' );
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('create_logs_table');
    }
}