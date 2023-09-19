<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration{
    
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->string('email',120)->unique();
            $table->enum('status', ['A', 'I', 'trash'])->default('A');
            $table->timestamps();
        });
    }

    public function down(){
        Schema::dropIfExists('users');
    }
}