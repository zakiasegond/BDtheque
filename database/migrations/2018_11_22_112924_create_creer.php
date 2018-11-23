<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creer', function (Blueprint $table) 
        {
            $table->unsignedInteger('bd_id');
            $table->unsignedInteger('collections_id');
            

            $table->foreign('bd_id')
                   ->references('bd_id')->on('bd')
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
