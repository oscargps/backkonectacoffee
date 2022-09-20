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
        Schema::create('productbysales', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('product_id');
            $table->string('product_name',100);
            $table->string('product_reference',100);
            $table->bigInteger('product_price');
            $table->bigInteger('product_weigth');
            $table->string('product_category',100);
            $table->bigInteger('product_stock');
            $table->bigInteger('id_sale');
            $table->bigInteger('product_qty');
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
        Schema::dropIfExists('productbysales');
    }
};
