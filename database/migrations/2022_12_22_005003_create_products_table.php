<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * 集計部門マスタ
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SummarySectionName', 64);
            $table->integer('category_id')->constrained();
            $table->integer('SummarySectionCode')->unsigned();
            $table->string('product_ab_name');
            $table->integer('DisplayOrder');
            $table->integer('PayFor');
            $table->integer('Hidden');
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
}
