<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string("civilité");
            $table->string("email");
            $table->string("telephone");
            $table->string("mobile")->nullable();
            $table->string("pays");
            $table->string("ville");
            $table->string("rue");
            $table->string("refnom")->nullable();
            $table->string("image")->nullable();
            $table->string("refemail")->nullable();
            $table->string("refmobile")->nullable();
            $table->boolean("active")->default(true);;
            $table->string("name");
            $table->string("password");
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
        Schema::dropIfExists('clients');
    }
}
