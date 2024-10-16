<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\stock  ;
use Illuminate\Http\Request;

class stockController extends Controller
{
    function index(){
        return  stock::all();
    }

    function show( stock $stock){
        return $stock;
    }
}
