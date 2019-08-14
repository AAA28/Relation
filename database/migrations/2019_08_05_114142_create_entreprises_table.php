<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('RaisonSocial');
            $table->string('Sigle');//->nullable();
            $table->string('Tel1');
            $table->string('Tel2');
            $table->string('cel1');
            $table->string('cel2');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('entreprise_thematique', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('entreprise_id')->unsigned();
            $table->integer('thematique_id')->unsigned();

            $table->timestamps();
        });

        Schema::create('entreprise_localisation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('entreprise_id')->unsigned();
            $table->integer('localisation_id')->unsigned();

            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
