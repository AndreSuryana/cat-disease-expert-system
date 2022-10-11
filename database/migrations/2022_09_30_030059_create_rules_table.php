<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('disease_uid');
            $table->tinyInteger('G1');
            $table->tinyInteger('G2');
            $table->tinyInteger('G3');
            $table->tinyInteger('G4');
            $table->tinyInteger('G5');
            $table->tinyInteger('G6');
            $table->tinyInteger('G7');
            $table->tinyInteger('G8');
            $table->tinyInteger('G9');
            $table->tinyInteger('G10');
            $table->tinyInteger('G11');
            $table->tinyInteger('G12');
            $table->tinyInteger('G13');
            $table->tinyInteger('G14');
            $table->tinyInteger('G15');
            $table->tinyInteger('G16');
            $table->tinyInteger('G17');
            $table->tinyInteger('G18');
            $table->tinyInteger('G19');
            $table->tinyInteger('G20');
            $table->tinyInteger('G21');
            $table->tinyInteger('G22');
            $table->tinyInteger('G23');
            $table->tinyInteger('G24');
            $table->tinyInteger('G25');
            $table->tinyInteger('G26');
            $table->tinyInteger('G27');
            $table->tinyInteger('G28');
            $table->tinyInteger('G29');
            $table->tinyInteger('G30');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
}
