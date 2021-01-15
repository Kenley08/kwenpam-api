<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblannonce extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblannonce', function (Blueprint $table) {
            $table->bigIncrements('Id_An');
            $table->integer('Id_Uti');
            $table->integer('Id_Cat_An');
            $table->integer('Id_Mon');
            $table->integer('Id_Img');
            $table->decimal('Prix',10,0);
            $table->integer('quantite');
            $table->string('preciser');
            $table->longText('Description');
            $table->integer('Negociable');
            $table->integer('Etat');
            $table->integer('Activated');
            $table->integer('paye');
            $table->integer('livraison');
            $table->dateTime('Date_Ajout')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('Date_Update')->default(DB::raw('CURRENT_TIMESTAMP'));
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblannonce');
    }
}
