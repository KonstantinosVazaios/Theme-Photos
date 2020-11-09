<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use \Illuminate\Support\Facades\Storage;


class Product extends Model
{
      protected $fillable = [
          'title','category_id', 'description', 'price', 'image_path', 'slug', 'availability', 'position'
      ];

      public function category()
      {
        return $this->hasOne(Category::class, 'id', 'category_id');
      }

      public function deleteImg()
      {
        $fileExists = Storage::exists($this->image_path);
        if ($fileExists) {
          Storage::delete($this->image_path);
        }
      }

      
}
