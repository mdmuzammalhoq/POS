<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('product_name');
            $table->integer('cat_id');
            $table->integer('sup_id');
            $table->integer('user_id')->nullable();
            $table->string('product_serial'); //product_code
            $table->string('product_garage');
            $table->string('product_route');
            $table->string('product_image');
            $table->string('buying_date');
            $table->string('buying_price');
            $table->string('selling_price');
            $table->string('offer_price');
            $table->string('net_wight');
            $table->string('detail');
            $table->string('status');
            $table->string('total_stock');
            $table->string('stock_in')->nullable();
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
