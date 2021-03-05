<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTalentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_talent', function (Blueprint $table) {
            $table->unsignedBigInteger('talent_id');
            $table->foreign('talent_id')->references('id')->on('talents');//

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_talent');
    }
}
