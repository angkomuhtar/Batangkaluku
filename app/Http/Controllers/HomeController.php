<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use \stdClass;

use App\Models\Article;
use App\Models\Content;
use App\Models\RouteVisitor;
use App\Models\Slider;

class HomeController extends Controller
{
    public function index()
    {
        // channelsinfo
        $request = Http::get('https://www.googleapis.com/youtube/v3/channels', [
            'id' => 'UCx9t3TUybwKjPEhD26ONOsA',
            'key' => 'AIzaSyAuGEiC11whFWxlndJWsAo8FbiZSDoJhIE',
            'part' => 'snippet,statistics'
        ]);
        $response = $request->json();
        $subs = $response['items'][0]['statistics']['subscriberCount'];
        $channelsInfo = new stdClass;
        $channelsInfo->name = $response['items'][0]['snippet']['title'];
        $channelsInfo->img = $response['items'][0]['snippet']['thumbnails']['medium']['url'];
        $channelsInfo->subs = ($subs >= 1000000 ? number_format($subs/1000000, 2, '.', ',') ." jt" : ($subs > 1000 ? number_format($subs/1000, 2, '.', ',') ." rb" : $subs));
        // return $channelsInfo;
        // latest Video
        $request = Http::get('https://www.googleapis.com/youtube/v3/search', [
            'channelId' => 'UCx9t3TUybwKjPEhD26ONOsA',
            'key' => 'AIzaSyAuGEiC11whFWxlndJWsAo8FbiZSDoJhIE',
            'part' => 'snippet,statistics',
            'maxResult' => '5',
            'order' => 'date',
            'part' => 'snippet'
        ]);
        $response = $request->object();
        $latestVideo = $response->items;

        $lang = request()->query('lang', 'id');
        $maklumat = Content::where('name', 'maklumat')->first();
        $slider = Slider::where('is_active', 1)->orderBy('order_id')->get();
        $news = Article::where('is_active', 1)
            ->where('published_time', '<=', now())
            ->orderBy('published_time', 'desc')
            ->take(6)
            ->get();
        $news_pertanian = Article::where('is_active', 1)
            ->where('type', 'pertanian')
            ->where('published_time', '<=', now())
            ->orderBy('published_time', 'desc')
            ->take(4)
            ->get();
        $news_pelatihan = Article::where('is_active', 1)
            ->where('type', 'pelatihan')
            ->where('published_time', '<=', now())
            ->orderBy('published_time', 'desc')
            ->take(6)
            ->get();
        $visitor = RouteVisitor::get();

        return view('home', compact('slider', 'news', 'news_pertanian', 'news_pelatihan', 'lang', 'maklumat', 'visitor', 'channelsInfo','latestVideo'));
    }
}
