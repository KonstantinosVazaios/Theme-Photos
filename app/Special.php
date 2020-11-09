<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;

class Special extends Model
{
    protected $fillable = [
      'title', 'description', 'price', 'image_path'
    ];

    public function deleteImg()
    {
      $fileExists = Storage::exists($this->image_path);
      if ($fileExists) {
        Storage::delete($this->image_path);
      }
    }
}
