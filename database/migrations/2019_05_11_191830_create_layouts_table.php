<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLayoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_ru', 255);
            $table->string('name', 255);
            $table->text('text_ru')->nullable();
            $table->text('text')->nullable();
            $table->unsignedBigInteger('theme_id')->nullable();
            $table->string('type', 255)->default('tarot');
            $table->float('price_usd')->nullable();
            $table->float('price_uah')->nullable();

            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layouts');
    }
}
