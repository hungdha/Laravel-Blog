<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('profiles', function(Blueprint $table){
            $table->increments('id');
            $table->bigInteger('user');
            $table->string('address1', 100)->nullable();
            $table->string('address2', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('lang', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
