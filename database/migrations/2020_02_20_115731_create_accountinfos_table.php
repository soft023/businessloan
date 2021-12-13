<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('accountinfos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accountnumber')->nullable();

            $table->string('month1')->nullable();
            $table->string('debit1')->nullable();
            $table->string('credit1')->nullable();
            $table->string('eom1')->nullable();
            $table->string('amc1')->nullable();
            $table->string('interest1')->nullable();
            $table->string('totalearnings1')->nullable();

            $table->string('month2')->nullable();
            $table->string('debit2')->nullable();
            $table->string('credit2')->nullable();
            $table->string('eom2')->nullable();
            $table->string('amc2')->nullable();
            $table->string('interest2')->nullable();
            $table->string('totalearnings2')->nullable();

            $table->string('month3')->nullable();
            $table->string('debit3')->nullable();
            $table->string('credit3')->nullable();
            $table->string('eom3')->nullable();
            $table->string('amc3')->nullable();
            $table->string('interest3')->nullable();
            $table->string('totalearnings3')->nullable();

            $table->string('month4')->nullable();
            $table->string('debit4')->nullable();
            $table->string('credit4')->nullable();
            $table->string('eom4')->nullable();
            $table->string('amc4')->nullable();
            $table->string('interest4')->nullable();
            $table->string('totalearnings4')->nullable();

            $table->string('month5')->nullable();
            $table->string('debit5')->nullable();
            $table->string('credit5')->nullable();
            $table->string('eom5')->nullable();
            $table->string('amc5')->nullable();
            $table->string('interest5')->nullable();
            $table->string('totalearnings5')->nullable();

            $table->string('month6')->nullable();
            $table->string('debit6')->nullable();
            $table->string('credit6')->nullable();
            $table->string('eom6')->nullable();
            $table->string('amc6')->nullable();
            $table->string('interest6')->nullable();
            $table->string('totalearnings6')->nullable();
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
        Schema::dropIfExists('accountinfos');
    }
}
