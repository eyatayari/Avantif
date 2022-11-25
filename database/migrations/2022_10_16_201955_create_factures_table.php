<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {


            $table->string("numFacture")->primary();
            $table->date("DateFacture");
            $table->string('mode_paiement');
            $table->string('notes');
            $table->float("totalFacture");
            $table->unsignedBigInteger("prestation_id");
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("client_id");
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
        Schema::dropIfExists('factures');
    }
}
