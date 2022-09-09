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
        Schema::table('countries', function (Blueprint $table) {
            $table->tinyInteger('continent_id');
            
            $table->foreign('continent_id')->references('id')->on('continents')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('operators', function (Blueprint $table) {
            $table->tinyInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('lotteries', function (Blueprint $table) {
            $table->tinyInteger('operator_id');
            $table->foreign('operator_id')->references('id')->on('operators')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('draws', function (Blueprint $table) {
            $table->smallInteger('lottery_id');
            $table->foreign('lottery_id')->references('id')->on('lotteries')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('draw_numbers', function (Blueprint $table) {
            $table->bigInteger('draw_id');
            $table->foreign('draw_id')->references('id')->on('draws')->onUpdate('cascade')->onDelete('cascade');

            $table->smallInteger('number_type_id');
            $table->foreign('number_type_id')->references('id')->on('number_types')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
};
