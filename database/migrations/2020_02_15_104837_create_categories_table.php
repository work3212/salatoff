<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            //category description
            $table->bigIncrements('id');
            $table->string('name', 250);
            $table->string('slug', 250);
            $table->text('description')->nullable();
            $table->text('image')->nullable();

            //add class
            $table->text('class_category')->nullable();
            $table->text('class_top_menu')->nullable();

            //connection
            $table->bigInteger('heading')->unsigned();
            $table->integer('parent')->default(0);

            //seo
            $table->text('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->timestamps();
        });


        Schema::table('categories', function (Blueprint $table) {
            $table->foreign('heading')
                ->references('id')
                ->on('headings')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
