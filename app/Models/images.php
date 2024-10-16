<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class images extends Model
{
    use HasFactory;
    protected $fillable=["img1","img2","img3","img4","img5",];
    public function products():BelongsTo{
        return $this->belongsTo(products::class,"image_id","image_id");
    }
}
