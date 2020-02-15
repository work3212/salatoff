<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarnishesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garnishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',250);
            $table->text('image')->nullable();
            $table->text('bzu')->nullable();
            $table->text('energy')->nullable();
            $table->text('composition')->nullable();
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
        Schema::dropIfExists('garnishes');
    }
}
