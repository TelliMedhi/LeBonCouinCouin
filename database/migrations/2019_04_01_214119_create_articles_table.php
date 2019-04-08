<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('category');
            $table->string('titre');
            $table->string('text');
            $table->float('prix');
            $table->string('image0');
            $table->float('code_postal');
            $table->string('region');
            $table->string('user_id');
            $table->timestamps();
            $table->float('longitude');
            $table->float('latitude');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('code_postal')->references('ville_code_postal')->on('villes_france_free');
            /*$table->forinkey*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
