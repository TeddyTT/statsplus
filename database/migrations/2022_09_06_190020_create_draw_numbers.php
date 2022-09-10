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
        Schema::create('draw_numbers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('draw_id');
            $table->foreign('draw_id')->references('id')->on('draws')->onUpdate('cascade')->onDelete('cascade');
            $table->smallInteger('number_type_id');
            $table->foreign('number_type_id')->references('id')->on('number_types')->onUpdate('cascade')->onDelete('restrict');
            $table->tinyInteger('number');
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
        Schema::dropIfExists('draw_numbers');
    }
};
