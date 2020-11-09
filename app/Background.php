<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;


class Background extends Model
{
    protected $fillable = [
      'image_path'
    ];

    public function deleteImg()
    {
      $fileExists = Storage::exists($this->image_path);
      if ($fileExists) {
        Storage::delete($this->image_path);
      }
    }
}
