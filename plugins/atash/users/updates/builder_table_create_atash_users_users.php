<?php namespace Atash\Users\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAtashUsersUsers extends Migration
{
    public function up()
    {
        Schema::create('atash_users_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('atash_users_users');
    }
}
