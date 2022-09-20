<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productbysales extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_id',
        'product_name',
        'product_reference',
        'product_price',
        'product_weigth',
        'product_category',
        'product_stock',
        'id_sale'
    ];

    public function productBySales()
    {
    	return $this->belongsTo(Productbysales::class);
    }
}
