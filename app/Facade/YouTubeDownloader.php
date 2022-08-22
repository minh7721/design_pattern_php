<?php
namespace App\Facade;
class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;
    protected $ffmpegvideo;

    public function __construct(string $youtubeApiKey)
    {
        $this->youtube = new YouTube($youtubeApiKey);
        $this->ffmpeg = new FFMpeg();
        $this->ffmpegvideo = new FFMpegVideo();
    }

    public function downloadVideo(string $url): void
    {
//        echo "Fetching video metadata from youtube...\n";
         $title = $this->youtube->fetchVideo();
         echo $title;
//        echo "Saving video file to a temporary file...\n";
         $this->youtube->saveAs($url, "video.mpg");
//        echo "Processing source video...\n";
         $video = $this->ffmpeg->open('video.mpg');
//        echo "Normalizing and resizing the video to smaller dimensions...\n";
//         $video
//             ->filters()
//             ->resize()
//             ->synchronize();
//        echo "Capturing preview image...\n";
        // $video
        //     ->frame(FFMpeg\Coordinate\TimeCode::fromSeconds(10))
        //     ->save($title . 'frame.jpg');
//        echo "Saving video in target formats...\n";
        // $video
        //     ->save(new FFMpeg\Format\Video\X264(), $title . '.mp4')
        //     ->save(new FFMpeg\Format\Video\WMV(), $title . '.wmv')
        //     ->save(new FFMpeg\Format\Video\WebM(), $title . '.webm');


        echo "\n";
        $videos = $this->ffmpegvideo;
        $filters = $videos
            ->filters()
            ->frame()
            ->resize()
            ->synchronize()
            ->save('video.mpg');
    }
}