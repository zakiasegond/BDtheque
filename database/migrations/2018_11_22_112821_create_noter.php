<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('noter', function (Blueprint $table) 
        {
            $table->unsignedInteger('bd_id');
            $table->unsignedInteger('avis_id');
            

            $table->foreign('bd_id')
                   ->references('bd_id')->on('bd')
                   ->onDelete('cascade');
            $table->foreign('avis_id')
                   ->references('avis_id')->on('avis')
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
