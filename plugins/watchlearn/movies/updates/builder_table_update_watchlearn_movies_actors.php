<?php namespace Watchlearn\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateWatchlearnMoviesActors extends Migration
{
    public function up()
    {
        Schema::table('watchlearn_movies_actors', function($table)
        {
            $table->increments('id')->change();
        });
    }
    
    public function down()
    {
        Schema::table('watchlearn_movies_actors', function($table)
        {
            $table->integer('id')->change();
        });
    }
}
