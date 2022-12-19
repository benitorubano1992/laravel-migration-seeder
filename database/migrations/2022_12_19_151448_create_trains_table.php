<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azineda', 100);
            $table->string('stazione_partenza');
            $table->string("stazione_arrivo");
            $table->dateTime('orario_partenza');
            $table->dateTime('orario_arrivo');
            $table->string('codice', 50);
            $table->tinyInteger('carrozze')->unsigned()->nullable();
            $table->tinyInteger('in_orario')->unsigned();
            $table->tinyInteger('cancellato')->unsigned();
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
        Schema::dropIfExists('trains');
    }
};
