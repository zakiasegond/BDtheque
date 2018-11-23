<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) 
        {
            $table->increments('utilisateur_id');
            $table->string('utilisateur_nom');
            $table->string('utilisateur_prenom');
            $table->string('utilisateur_pseudo');
            $table->date('utilisateur_date_naissance');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
