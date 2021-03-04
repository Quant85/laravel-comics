<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTalentCreditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('talent_credit', function (Blueprint $table) {
            $table->unsignedBigInteger('talent_id');
            $table->foreign('talent_id')->references('id')->on('talents');//

            $table->unsignedBigInteger('credit_id');
            $table->foreign('credit_id')->references('id')->on('credits');//
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('talent_credit');
    }
}
