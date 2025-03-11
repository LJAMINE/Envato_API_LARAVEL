<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;
use App\Filters\V1;


class invoicesFilter extends ApiFilter
{

    // $table->integer('customer_id');
    // $table->integer('amount');
    // $table->string('status');//paid etc
    // $table->dateTime('billed_date');
    // $table->dateTime('paid_date')->nullable();


    
    protected $safeParms = [

        'customerId' => ['eq'],
        'amount' => ['eq','lt','gt'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq','lt','gt'],
        'paidDate' => ['eq'],
       
    ];

    protected $columnMap = [

        'customerId'=>'customer_id',
        'billedDate'=>'billed_date',
        'paidDate'=>'paid_Date',
    ];

    protected $operatorMap = [

        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
        'ne' => '!=',


    ];

   
}
