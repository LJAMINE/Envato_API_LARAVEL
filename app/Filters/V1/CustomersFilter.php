<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;
use App\Filters\V1;


class CustomersFilter extends ApiFilter
{

    protected $safeParms = [

        'name' => ['eq'],
        'type' => ['eq'],
        'email' => ['eq'],
        'adress' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];

    protected $operatorMap = [

        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',

    ];
}
