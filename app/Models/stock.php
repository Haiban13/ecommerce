<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class stock extends Model
{
    use HasFactory;
    protected $table='stock';
    protected $fillable=["m","s","l","xl","xxl",];
    public $timestamps=false;

    public function products():BelongsTo{
        return $this->belongsTo(products::class,"stock_id","stock_id");
    }
}
