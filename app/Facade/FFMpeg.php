<?php

namespace App\Facade;

class FFMpeg
{
    public static function create(): FFMpeg {
        return "FFMpeg";
    }
    public function open(string $video): void {
        echo "Open video: ".$video;
    }
}