<?php

namespace App\Services;

use App\Models\photos;
use App\Models\Recits;

/**
 * Class ImageService.
 */
class ImageService
{
    public function store($images, Recits $recits)
    {
        foreach ($images as $image) {
            $imageName = $this->moveImage($image);
            photos::create([
                "image" => $imageName,
                "recit_id" => $recits->id
            ]);
        }
    }
    
    public function moveImage($image)
    {
       
        $imageName = time() . "." . $image->extension();
        $image->move(public_path('images/storage'), $imageName);
        return $imageName;
    }
}