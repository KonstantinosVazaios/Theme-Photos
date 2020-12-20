<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;

class About extends Model
{
    protected $fillable = [
      'title_first', 'description_first', 'image_path_first', 'title_second', 'description_second', 'image_path_second'
    ];

    public function deleteImg($position)
    {
      $fileExists = Storage::exists($this->image_path_ + $position);
      if ($fileExists) {
        Storage::delete($this->image_path_ + position);
      }
    }

}
