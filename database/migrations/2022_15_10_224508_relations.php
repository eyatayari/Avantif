<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('factures', function (Blueprint $table) {
            // relation enseignant etablissement

            //relation typeEtablissement etablissement
            $table->foreign('prestation_id')->references('id')->on('prestations');
            $table->foreign('product_id')->references('id')->on('produits');
            $table->foreign('client_id')->references('id')->on('clients');

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
