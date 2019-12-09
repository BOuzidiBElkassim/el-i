<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('date');
            $table->string('nom');
            $table->integer('late'); /* GPS */
            $table->integer('long'); /* GPS */
            $table->text('nom_rue');
            $table->text('complement');
            $table->string('ville');
            $table->integer('codepostal');
            $table->string('theme');
            $table->text('descriptif');
            $table->integer('effectif_max');
            $table->integer('effectif_min');
            $table->integer('user_id')->unsigned();

            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
