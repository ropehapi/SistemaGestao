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
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('name');
            $table->string('cod')->nullable();
            $table->unsignedBigInteger('product_category_id');
            $table->decimal('cost_price');
            $table->decimal('sale_price');
            $table->integer('stock');
            $table->integer('minimum_stock')->nullable()->default(0);
            $table->longText('comment')->nullable();

            $table->foreign('product_category_id')->references('id')->on('products_categories');
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
