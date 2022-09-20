<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'total_sale',
    ];

    public function sale()
    {
    	return $this->belongsTo(Sales::class);
    }
}
