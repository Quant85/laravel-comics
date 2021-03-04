<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Extension\Table\Table;

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
            $table->string('title', 250);
            $table->string('volume',80);
            $table->text('cover')->nullable();
            $table->text('gallery')->nullable();
            $table->text('description')->nullable();
            $table->smallInteger('page_count')->nullable();
            $table->float('price',6,2)->nullable();
            $table->text('slug');
            $table->date('sale_date')->nullable();
            $table->smallInteger('sold')->nullable();
            $table->boolean('available')->default(false);
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
