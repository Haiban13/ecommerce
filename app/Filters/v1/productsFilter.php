<?php

namespace App\Filters\v1;

use App\Filters\ApiFilters ;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Operator;
 


class productsFilter extends ApiFilters{
    protected $safeParams=[
        'name'=>['eq'],
        'price'=>['eq','gt','lt'],
        'category_id'=>['eq'],
    
    ];

    protected $Operators=[
        'eq'=>'=',
        'gt'=>'>',
        'lt'=>'<',
    ];

     
}