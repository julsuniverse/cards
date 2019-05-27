<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('name_ru', 255);
        });
    }

    public function down()
    {
        Schema::dropIfExists('themes');
    }
}
