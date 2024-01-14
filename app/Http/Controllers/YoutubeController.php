<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use YouTube\YouTubeDownloader;

class YoutubeController extends Controller
{
    public function download(Request $req)
    {
        $req->validate(
            [
                'url'=> 'required|url'
            ]
        );

        $url= $req->url;

        $youtube = new YouTubeDownloader();
        if ($url){
             $downloadOptions = $youtube->getDownloadLinks($url);

       return redirect($downloadOptions->getFirstCombinedFormat()->url);
        }
        return 'No URL found';

    }

    public function index(){
        return view('youtube');
    }
}
