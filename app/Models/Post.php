<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    public function cate(){
        return $this->belongsToMany(Category::class,
        'category_product',
        'post_id',
        'category_id');
    }
    public function pro(){
        return $this->belongsToMany(Product::class,
        'category_product',
        'post_id',
        'product_id');
    }
}
