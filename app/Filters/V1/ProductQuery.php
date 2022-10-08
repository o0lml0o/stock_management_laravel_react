<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ProductQuery extends ApiFilter
{
    protected $safeParms = [
        'name' => ['eq'],
        'barcode' => ['eq'],
        'quantity' => ['eq', 'gt', 'lt']
    ];

    protected $columnMap = [
        'barcode' => 'codebar',
    ];
    protected $operatorMap =
        [   'eq' => '=',
            'lt' => '<',
            'lte' => '<=',
            'gt' => '>',
            'gte' => '>='];



}
