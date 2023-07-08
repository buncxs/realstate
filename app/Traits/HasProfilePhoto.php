<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasProfilePhoto
{

  public function updateProfilePhoto(UploadedFile $file, $storagePath)
  {
    tap($this->photo, function ($old) use ($file, $storagePath) {
      // Save the file in the hdd
      $this->photo = Storage::put($storagePath, $file);

      if ($old) {
        // Erase the old file if exists
        Storage::delete($old);
      }
    });
  }
}
