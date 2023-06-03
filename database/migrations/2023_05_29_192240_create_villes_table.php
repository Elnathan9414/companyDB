<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('villes', function (Blueprint $table) {
            $table->id();
            $table->string("libeleVille");
            $table->unsignedBigInteger("pays_id");
            $table->timestamps();


           $table->foreign("pays_id")->references("id")->on("pays")->onDelete('CASCADE')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("villes", function (Blueprint $table){

          
            $table->dropForeign(['pays_id']);
            
            });

        Schema::dropIfExists('villes');
    }
}
