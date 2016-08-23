<?php
/**
 * Created by PhpStorm.
 * User: akung
 * Date: 8/18/16
 * Time: 17:40
 */

namespace App\Jobs;


use App\Repositories\UUIDGenerator;
use Intervention\Image\Facades\Image;

class ResizeJob extends Job
{
    protected $imagePath;


    protected $count = 1000;

    public function __construct($image)
    {
        $this->imagePath = $image;
    }

    public function handle()
    {
        $img = Image::make($this->imagePath);

        for($i = 10; $i <= $this->count; $i++)
        {
            // resize the image to a width of 300 and constrain aspect ratio (auto height)
            $img->resize($i, null, function ($constraint) {
               $constraint->aspectRatio();
            });

            $img->save(storage_path('img/gen/' . UUIDGenerator::v4() . "_{$i}x{$i}.png"));
        }


    }
}