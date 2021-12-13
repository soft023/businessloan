<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profitanalysis extends Model
{
    //


    protected $fillable = ['cid', 'sellingprice', 'costprice', 'salaries','rent','utility','transportation','servicecharge','food','loanrepayment','others'];
}
