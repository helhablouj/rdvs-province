<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('cnie');
            $table->string('tel');
            $table->string('email');
            $table->string('objet');

            $table->timestamp('date_heure'); // date et heure attribuées

            $table->timestamps();

            $table->unsignedBigInteger('entite_id');
            $table->foreign('entite_id')
                  ->references('id')->on('entites')
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
        Schema::dropIfExists('rdvs');
    }
}
