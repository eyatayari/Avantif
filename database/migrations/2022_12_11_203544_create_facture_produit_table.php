<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFactureProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facture_produit', function (Blueprint $table) {
            $table->integer('facture_id')->unsigned();
            $table->integer('produit_id')->unsigned();
            $table->integer("nbr");
            $table->foreign('facture_id')->references('id')->on('factures')
                ->onDelete('cascade');

            $table->foreign('produit_id')->references('id')->on('produits')
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
        Schema::dropIfExists('facture_produit');
    }
}
