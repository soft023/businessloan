<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            

            Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('accountnumber')->unique();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('othername')->nullable();
            $table->string('address')->nullable();
            $table->string('phoneno')->nullable();
            $table->string('bvn')->nullable();



            $table->string('business')->nullable();
            $table->string('businessaddress')->nullable();
            $table->string('aboutcustomer')->nullable();
            $table->string('businessbackground')->nullable();
            $table->string('salesreport')->nullable();
            $table->string('financialreview')->nullable();







            $table->string('product')->nullable();
            $table->string('requestamount')->nullable();
            $table->string('approveamount')->nullable();
            $table->string('rate')->nullable();
            $table->integer('tenure')->nullable();
            $table->string('purpose')->nullable();
            $table->string('repaymentsource')->nullable();
            $table->string('rocomment')->nullable();




            $table->string('applicationfee')->nullable();
            $table->string('managementfee')->nullable();
            $table->string('penaltyfee')->nullable();
            $table->string('insurancefee')->nullable();
            $table->string('collateral1')->nullable();
            $table->string('collateral2')->nullable();


            $table->string('gfirstname1')->nullable();
            $table->string('glastname1')->nullable();
            $table->string('gothername1')->nullable();
            $table->string('gphone1')->nullable();
            $table->string('gbvn1')->nullable();
            $table->string('gaddress1')->nullable();



            $table->string('gfirstname2')->nullable();
            $table->string('glastname2')->nullable();
            $table->string('gothername2')->nullable();
            $table->string('gphone2')->nullable();
            $table->string('gbvn2')->nullable();
            $table->string('gaddress2')->nullable();


            $table->string('gfirstname3')->nullable();
            $table->string('glastname3')->nullable();
            $table->string('gothername3')->nullable();
            $table->string('gphone3')->nullable();
            $table->string('gbvn3')->nullable();
            $table->string('gaddress3')->nullable();
            




            $table->string('bankname')->nullable();
            $table->string('nummonths')->nullable();
            $table->string('avdebit')->nullable();
            $table->string('avcredit')->nullable();
            $table->string('aveod')->nullable();
            $table->string('avamc')->nullable();
            $table->string('avint')->nullable();
            $table->string('avtotearning')->nullable();
            $table->string('costoffund')->nullable();
            $table->string('expectedprofit')->nullable();



            $table->string('officer')->nullable();
            $table->string('officerunit')->nullable();
            $table->string('officeraffirmation')->nullable();
            $table->string('headunit')->nullable();
            $table->string('headounitcomment')->nullable();
            $table->string('credit')->nullable();
            $table->string('creditcomment')->nullable();
            $table->string('control')->nullable();
            $table->string('controlcomment')->nullable();
            $table->string('fincon')->nullable();
            $table->string('finconcomment')->nullable();
            $table->string('md')->nullable();
            $table->string('mdcomment')->nullable();
            $table->string('rejectedreason')->nullable();
            $table->string('rejectedby')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('customers');
    }
}
