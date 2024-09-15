<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'prod_id';

    protected $fillable = [
        'catalog_id',
        'brand',
        'count',
        'discount',
        'image',
        'info',
        'price',
        'prod_status',
        'sold',
        'type',
    ];
}
