<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resale_products', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_available');
            $table->integer('quantity_accounting');
            $table->integer('quantity_allocated');
            $table->date('date_last_exit')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('size',2);
            $table->string('material')->nullable();
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('resale_product_id');
            $table->foreign('resale_product_id')->references('id')->on('resale_products')->onDelete('cascade');
            $table->longText('additional_infor')->nullable();
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
        Schema::dropIfExists('product_details');
        Schema::dropIfExists('resale_products');
    }
}
