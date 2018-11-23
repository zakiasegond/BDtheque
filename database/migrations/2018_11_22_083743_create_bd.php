<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBd extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd', function (Blueprint $table) 
        {
            $table->increments('bd_id');
            $table->string('bd_nom');
            $table->string('bd_auteur')->unique();
            $table->string('url_image');
            $table->date('bd_date_sortie')->nullable();
            $table->string('bd_commentaires');
            $table->integer('bd_notes');
            
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
