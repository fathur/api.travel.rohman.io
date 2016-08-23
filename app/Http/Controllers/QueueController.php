<?php
/**
 * Created by PhpStorm.
 * User: akung
 * Date: 8/18/16
 * Time: 17:37
 */

namespace App\Http\Controllers;


use App\Jobs\ResizeJob;
use App\Repositories\UUIDGenerator;
use Intervention\Image\Facades\Image;

class QueueController extends Controller
{
    public function index()
    {
//        $img = Image::make(storage_path('img/ori/mountain-rang.png'));
//
//        for($i = 10; $i <= 100; $i++)
//        {
//            // resize the image to a width of 300 and constrain aspect ratio (auto height)
//            $img->resize($i, null, function ($constraint) {
//                $constraint->aspectRatio();
//            });
//
//            $img->save(storage_path('img/gen/' . UUIDGenerator::v4() . "_{$i}x{$i}.png"));
//        }

        $resizeJob = new ResizeJob(storage_path('img/ori/mountain-rang.png'));

        $this->dispatch($resizeJob->onQueue('resize'));
    }
}