<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    use HasFactory;

    protected $table = 'product-info';
    protected $primaryKey = 'prod_id';
    protected $fillable = [
        'prod_id'
    ];
}
