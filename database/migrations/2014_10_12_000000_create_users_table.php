<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {      
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('username', 50);
            $table->string('email', 128)->unique();
            $table->string('password', 127);
            $table->string('firstname', 100)->nullable();
            $table->string('lastname', 100)->nullable();
            $table->smallInteger('activated');
            $table->integer('lastlogin');
            $table->integer('createdtime');
            $table->integer('modifiedtime');
            $table->rememberToken();
            //$table->timestamps();
        });
        
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
