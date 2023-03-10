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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('name')->unique();
            $table->double('price');
            $table->string('image');
            $table->double('quantity');
            $table->string('description');
            $table->integer('status')->default(1);
            $table->bigInteger('brand_id')->unsigned();
            $table->foreign('brand_id')->references('brand_id')->on('brands')->cascadeOnDelete();
            $table->bigInteger('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->cascadeOnDelete();
            $table->bigInteger('warehouse_id')->unsigned();
            $table->foreign('warehouse_id')->references('warehouse_id')->on('warehouses')->cascadeOnDelete();
            $table->rememberToken();
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
        Schema::dropIfExists('products');
    }
};
