<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasProfilePhoto
{

  public function updateProfilePhoto(UploadedFile $file, $storagePath)
  {
    tap($this->profile_photo_path, function ($old) use ($file, $storagePath) {
      
      // Save the file in the hdd
      $this->profile_photo_path = Storage::put($storagePath, $file);
    
      if ($old) {
        // Erase the old file if exists
        Storage::delete($old);
      }
    });
  }
}
