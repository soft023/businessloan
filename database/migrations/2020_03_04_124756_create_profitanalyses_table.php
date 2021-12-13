<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfitanalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profitanalyses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cid');
            $table->string('sellingprice')->nullable();
            $table->string('costprice')->nullable();
            $table->string('salaries')->nullable();
            $table->string('rent')->nullable();
            $table->string('utility')->nullable();
            $table->string('transportation')->nullable();
            $table->string('servicecharge')->nullable();
            $table->string('food')->nullable();
            $table->string('loanrepayment')->nullable();
            $table->string('others')->nullable();
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
        Schema::dropIfExists('profitanalyses');
    }
}
