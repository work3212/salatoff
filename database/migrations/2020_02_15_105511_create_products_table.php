<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //product description
            $table->bigIncrements('id');
            $table->string('name', 250);
            $table->string('slug', 250);
            $table->text('image')->nullable();
            $table->double('price')->default(0);

            //composition
            $table->text('bzu')->nullable();
            $table->text('energy')->nullable();
            $table->text('composition')->nullable();

            //connection
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('min_order')->nullable();
            $table->bigInteger('implementation_period')->nullable();
            $table->bigInteger('packaging')->nullable();

            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');

            $table->foreign('min_order')
                ->references('id')
                ->on('min_orders')
                ->onDelete('cascade');

            $table->foreign('implementation_period')
                ->references('id')
                ->on('implementation_periods')
                ->onDelete('cascade');

            $table->foreign('packaging')
                ->references('id')
                ->on('packagings')
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
        Schema::dropIfExists('products');
    }
}
