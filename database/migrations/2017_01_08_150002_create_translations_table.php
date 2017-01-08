<?php


use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    protected $connection = 'mongodb';


    public function up()
    {

        Schema::connection($this->connection)->table('translations', function(Blueprint $collection)
        {
            $collection->index('id');
            $collection->index('appId');
            $collection->index('moduleId');
            $collection->index('languageId');
            $collection->text('title');
            $collection->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::connection($this->connection)->table('translations', function(Blueprint $collection)
        {
            $collection->drop();
        });
    }
}
