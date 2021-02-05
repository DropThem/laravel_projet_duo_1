<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('maintext', 30);
            //les 3text & les icon
            $table->string('icon', 20);
            $table->string('colomtext', 25);
            $table->string('icon2', 20);
            $table->string('colomtext2', 25);
            $table->string('icon3', 20);
            $table->string('colomtext3', 25);
            //Les button
            $table->string('btntext', 20);
            $table->string('btntext2', 20);
            //Le IMG 
            $table->string('img');
            //2iem partie Titre
            $table->string('maintext2');
            //Le text dans le maintext2 & img
            $table->string('textmain2');
            $table->string('img2');
            //text 2
            $table->string('text2');
            //les 3text avec des icon 
            $table->string('icon4');
            $table->string('text3');
            $table->string('icon5');
            $table->string('text4');
            $table->string('icon6');
            $table->string('text5');
            // Le lorem a la fin
            $table->string('lorem');
            //Voila fini pour le home :)
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
        Schema::dropIfExists('homes');
    }
}
