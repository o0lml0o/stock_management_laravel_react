<?php

namespace App\Filters\V1;

use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class ClientQuery extends ApiFilter
{
    protected $safeParms = [
        'name' => ['eq'],
        'last_name' => ['eq'],
        'phoen' => ['eq'],
        'address' => ['eq'],
        'store_id' => ['eq']
    ];

    protected $columnMap = [
    ];
    protected $operatorMap =
        ['eq' => '=',
            'lt' => '<',
            'lte' => '<=',
            'gt' => '>',
            'gte' => '>='];


}
