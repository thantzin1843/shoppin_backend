<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id' ,'color','size','quantity'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
