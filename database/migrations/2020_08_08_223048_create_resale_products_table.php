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
            $table->integer('quantity_allocated')->default(0);
            $table->char('size',2);
            $table->string('material')->nullable();
            $table->unsignedBigInteger('color_id')->nullable();
            $table->foreign('color_id')->references('id')->on('colors');
            $table->longText('additional_infor')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
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
        Schema::dropIfExists('resale_products');
    }
}
