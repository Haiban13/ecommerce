<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class products extends Model
{
    use HasFactory;
    protected $fillable=["name",
                        "description",
                        "price",
                        "stock_id",
                        "image_id",
                        "category_id",]; 

    public function stock():HasOne{
        return $this->hasOne(stock::class,"stock_id","stock_id");
    }
    
    public function images():HasOne{
        return $this->hasOne(images::class,"image_id","image_id");
    }
    
    public function category():HasOne{
        return $this->hasOne(category::class,"category_id","category_id");
    }
}
