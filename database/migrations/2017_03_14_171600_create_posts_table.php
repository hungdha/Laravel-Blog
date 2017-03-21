<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('slug', 255);
            $table->string('title', 100);
            $table->string('except',200);
            $table->string('content', 5000);
            $table->bigInteger('hits');
            $table->unsignedSmallInteger('votes');                
            $table->unsignedSmallInteger('visible');
            $table->bigInteger('author');
            $table->integer('category');
            $table->dateTime('created_at');
            $table->dateTime('update_at');        
            $table->string('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
