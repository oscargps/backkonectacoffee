<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'product_name',
        'product_reference',
        'product_price',
        'product_weigth',
        'product_category',
        'product_stock',
        'created_at',
        'update_at',
        'active'
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}
