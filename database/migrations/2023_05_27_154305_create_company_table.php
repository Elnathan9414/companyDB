<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string("nomEntreprise");
            $table->string("sigle");
            $table->string("Pays");
            $table->string("region");
            $table->string("Ville");
            $table->string("quartier");
            $table->string("lieuDit");
            $table->string("adresse");
            $table->string("telephoneEntreprise");
            $table->string("emailEntreprise");
            $table->string("secteurActivite");
            $table->string("nomResponsable");
            $table->string("tireResponsable");
            $table->string("contactResponsable");
            $table->string("emailresponsable");
            $table->string("arrondissement");
            $table->string("siteWeb");
            $table->string("facebook");
            $table->string("instagram");
            $table->string("linkedin");
            $table->string("tailleEntreprise");

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
        Schema::dropIfExists('company');
    }
}
