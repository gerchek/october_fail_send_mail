<?php namespace Atash\Users\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAtashUsersUsers extends Migration
{
    public function up()
    {
        Schema::table('atash_users_users', function($table)
        {
            $table->string('login', 191);
            $table->string('pwd', 191);
            $table->dropColumn('name');
            $table->dropColumn('email');
        });
    }
    
    public function down()
    {
        Schema::table('atash_users_users', function($table)
        {
            $table->dropColumn('login');
            $table->dropColumn('pwd');
            $table->string('name', 191);
            $table->string('email', 191);
        });
    }
}
