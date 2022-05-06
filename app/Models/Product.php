<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillble = ['name','cod','product_category_id','cost_price','sale_price','stock','minimun_stock','comment'];
}
