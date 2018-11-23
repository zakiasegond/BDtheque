<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollectionner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectionner', function (Blueprint $table) 
        {
            $table->unsignedInteger('utilisateur_id');
            $table->unsignedInteger('collections_id');
            

            $table->foreign('utilisateur_id')
                   ->references('utilisateur_id')->on('utilisateur')
                   ->onDelete('cascade');
            $table->foreign('collections_id')
                   ->references('collections_id')->on('collection')
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
