<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class category extends Model
{
    use HasFactory;
    protected $table="category";
    public function products():BelongsTo{
        return $this->belongsTo(products::class,"category_id","category_id");
    }
}
