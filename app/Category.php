<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use \Illuminate\Support\Facades\Storage;

class Category extends Model
{
    protected $fillable =
    [
        'title', 'slug', 'position'
    ];


    public function products()
    {
      return $this->hasMany(Product::class, 'category_id');
    }

}
