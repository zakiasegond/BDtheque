<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouhaiter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('souhaiter', function (Blueprint $table) 
        {
            $table->unsignedInteger('bd_id');
            $table->unsignedInteger('liste_id');
            

            $table->foreign('bd_id')
                   ->references('bd_id')->on('bd')
                   ->onDelete('cascade');
            $table->foreign('liste_id')
                   ->references('liste_id')->on('liste')
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
