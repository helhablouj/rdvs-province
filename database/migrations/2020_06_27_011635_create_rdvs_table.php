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
            $table->string('nom', 60);
            $table->string('prenom', 40);
            $table->string('cnie', 8)->nullable();
            $table->string('tel', 11)->nullable();
            $table->string('email', 100)->nullable();
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
