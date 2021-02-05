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
            $table->string('title', 80);
            $table->string('subtitle', 100);
            $table->string('subtitle2', 100);
            $table->string('subtitle3', 100);
            $table->string('title2', 80);
            $table->string('subtitle11', 100);
            $table->string('subtitle22', 100);
            $table->string('subtitle33', 100);
            $table->string('img');
            $table->string('text');
            $table->string('icon');
            $table->string('btn');
            $table->string('btn2');
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
