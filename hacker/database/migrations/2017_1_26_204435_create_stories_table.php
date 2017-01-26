<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateStoriesTable extends Migration
{
    
    public function up()
    {
        Schema::create('items', function(Blueprint $table){
            $table->integer('id')->primary();
            $table->string('title');
            $table->text('description');
            $table->string('username');
            $table->char('item_type', 20);
            $table->string('url');
            $table->integer('time_stamp');
            $table->integer('score');
            $table->boolean('is_top');
            $table->boolean('is_show');
            $table->boolean('is_ask');
            $table->boolean('is_job');
            $table->boolean('is_new');
        });
    }
    
    public function down()
    {
        Schema::drop('items');
    }
}