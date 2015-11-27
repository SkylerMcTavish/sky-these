<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MainProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MainProject', function(Blueprint $table)
        {
            $table->increments('id_main_project');
            $table->integer('mp_us_id_user')->unsigned();
            $table->string('mp_title');
            $table->text('mp_description');
            $table->timestamps();

            $table->foreign('mp_us_id_user')->references('id_user')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('MainProject');
    }
}
