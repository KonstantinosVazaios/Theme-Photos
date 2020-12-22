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
      if ($position === "first") {
        $fileExists = Storage::exists($this->image_path_first);
        if ($fileExists) {
          Storage::delete($this->image_path_first);
        }
      }
      else {
        $fileExists = Storage::exists($this->image_path_second);
        if ($fileExists) {
          Storage::delete($this->image_path_second);
        }
      }

    }

    

}
