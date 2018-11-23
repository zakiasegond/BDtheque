<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConnecter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('connecter', function (Blueprint $table) 
        {
            $table->unsignedInteger('utilisateur_id');
            $table->unsignedInteger('connexion_id');
            

            $table->foreign('utilisateur_id')
                   ->references('utilisateur_id')->on('utilisateur')
                   ->onDelete('cascade');
            $table->foreign('connexion_id')
                   ->references('connexion_id')->on('connexion')
                   ->onDelete('cascade');
           

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
