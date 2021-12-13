<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerbankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customerbankings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('customerid');
            $table->string('month');
            $table->string('debit');
            $table->string('credit');
            $table->string('eod');
            $table->string('amc');
            $table->string('interest');
            $table->string('totalearning');
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
        Schema::dropIfExists('customerbankings');
    }
}
