<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestatairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestataires', function (Blueprint $table) {
           $table->id();
            $table->string('civilité');
                        $table->string('nom');
                        $table->string('prenom');

                        $table->string('password');
                        $table->string('image');
                        $table->string('email')->unique();
                        $table->string('adresse');
                        $table->string('pays');
                        $table->string('telephone');
                        $table->boolean("statut")->default(false);
                        $table->rememberToken();
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
        Schema::dropIfExists('prestataires');
    }
}
