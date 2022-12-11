<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturePrestationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_prestation', function (Blueprint $table) {

            $table->integer('facture_id')->unsigned();
            $table->integer('prestation_id')->unsigned();
            $table->integer("nbr");
            $table->foreign('facture_id')->references('id')->on('factures')
                ->onDelete('cascade');

            $table->foreign('prestation_id')->references('id')->on('prestations')
                ->onDelete('cascade');
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
        Schema::dropIfExists('facture_prestation');
    }
}
