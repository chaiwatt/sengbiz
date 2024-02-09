<?php

namespace App\Console\Commands;

use Goutte\Client;
use App\Models\Post;
use App\Models\Amphur;
use App\Models\PostInfo;
use App\Models\Province;
use App\Models\PidScrape;
use App\Models\PostImage;
use App\Models\SubCategory;
use App\Help\WebsiteScraper;
use App\Models\MainCategory;
use App\Models\PostNearPlace;
use Illuminate\Console\Command;
use App\Models\PostContactPhone;
use App\Models\SubMinorCategory;
use Illuminate\Support\Facades\Http;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class CreateScrapCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-scrap-cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->scrapList();
        $this->scrap();
        //$this->makeThumbnail();
    }
    
    function scrapList()
    {
        $scraper = new WebsiteScraper();
        $scraper->scrapList();
    }

    function scrap(){
        $scraper = new WebsiteScraper();
        $scraper->scrap();
    }

    function getString($defaultTitle,$string,$len)
    {
        $wordCount = mb_strlen($string, 'UTF-8');
        $trimmedResult = $string;
        if ($wordCount > $len) {
            $trimmedResult = mb_substr($string, 0, $len, 'UTF-8');
            $nextSpacePosition = mb_strpos($string, ' ', $len, 'UTF-8');
            if ($nextSpacePosition !== false) {
                $trimmedResult = mb_substr($string, 0, $nextSpacePosition, 'UTF-8');
            }
            $arr = ['www', 'http', '.com'];
  
            foreach ($arr as $substring) {
                if (stripos($trimmedResult, $substring) !== false) {
                    $trimmedResult = $defaultTitle;
                    break;
                } 
            }
        }
        return $trimmedResult;
    }
}
