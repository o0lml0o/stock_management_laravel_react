<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class OrderQuery extends ApiFilter
{
    protected $safeParms = [
        'client_id' => ['eq'],
        'created_at' => ['eq','gt','lt'],
        'updated_at' => ['eq','gt','lt']
    ];

    protected $columnMap = [];

    protected $operatorMap =
        [   'eq' => '=',
            'lt' => '<',
            'lte' => '<=',
            'gt' => '>',
            'gte' => '>='];
}
