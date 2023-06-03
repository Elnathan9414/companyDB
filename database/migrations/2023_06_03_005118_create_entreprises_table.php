<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntreprisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->id();
            $table->string("nomEntreprise");
            $table->string("sigle")->nullable();
            $table->string("quartier");
            $table->string("lieuDit");
            $table->string("adresse")->nullable();
            $table->string("telephoneEntreprise");
            $table->string("emailEntreprise");
            $table->string("tailleEntreprise");
            $table->string("nomResponsable")->nullable();
            $table->string("tireResponsable")->nullable();
            $table->string("contactResponsable")->nullable();
            $table->string("emailresponsable")->nullable();
            $table->string("siteWeb")->nullable();
            $table->string("facebook")->nullable();
            $table->string("instagram")->nullable();
            $table->string("linkedin")->nullable();
            
            $table->unsignedBigInteger("pays_id");
            $table->unsignedBigInteger("ville_id");
            $table->unsignedBigInteger("commune_id");
            $table->unsignedBigInteger("secteur_id");

            $table->foreign("pays_id")->references("id")->on("pays")->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign("ville_id")->references("id")->on("villes")->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign("commune_id")->references("id")->on("communes")->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign("secteur_id")->references("id")->on("secteurs")->onDelete('CASCADE')->onUpdate('CASCADE');
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
        Schema::table("entreprises", function (Blueprint $table){

            $table->dropForeign(['pays_id']);
            $table->dropForeign(['ville_id']);
            $table->dropForeign(['commune_id']);
            $table->dropForeign(['secteur_id']);
            
            });
        Schema::dropIfExists('entreprises');
    }
}
