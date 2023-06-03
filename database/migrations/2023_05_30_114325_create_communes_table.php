<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommunesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('communes', function (Blueprint $table) {
            $table->id();
            $table->string("libelleCommune");
            $table->unsignedBigInteger("ville_id");
            $table->unsignedBigInteger("pays_id");
           
            $table->foreign("pays_id")->references("id")->on("pays")->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign("ville_id")->references("id")->on("villes")->onDelete('CASCADE')->onUpdate('CASCADE');
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

        Schema::table("communes", function (Blueprint $table){

            $table->dropForeign(['pays_id']);
            $table->dropForeign(['ville_id']);
            
            });
        Schema::dropIfExists('communes');
    }
}
