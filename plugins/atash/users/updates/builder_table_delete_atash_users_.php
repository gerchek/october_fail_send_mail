<?php namespace Atash\Users\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteAtashUsers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('atash_users_');
    }
    
    public function down()
    {
        Schema::create('atash_users_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 191);
            $table->string('email', 191);
        });
    }
}
