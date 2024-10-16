<?php

namespace App\Filters ;

use Illuminate\Http\Request;

class ApiFilters{
    protected $safeParams=[
        
    
    ];

    protected $Operators=[
       
    ];

    protected $columnMap=[];

    public function transform(Request $request){
        $eloQuery=[];

        foreach($this->safeParams as $params => $Operators){
            $query=$request->query($params);

            if(!isset($query)){
                continue;
            }

            $column=$this->columnMap[$params] ?? $params;
            
            foreach($Operators as $Operator){
                if(isset($query[$Operator])){
                    $eloQuery[]=[$column,$this->Operators[$Operator],$query[$Operator]];
                    
                }
            }
        }
        return $eloQuery;
    }
}