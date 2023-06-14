<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use \stdClass;

use InstagramScraper\Instagram;
use App\Models\Article;
use App\Models\Content;
use App\Models\Rating;
use App\Models\RouteVisitor;
use App\Models\Slider;
use App\Models\TrainingInfo;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function index()
    {

        // $instagram = new Instagram;
        // $instagram->setRapidApiKey('6dc0fcd320mshab6cac845c248a7p1b0498jsnaacf852a43d4');
        // $account = $instagram->getAccount('zhawier_muhtar');
        // $medias = $account->getMedias();

        // $request = Http::withToken('AAAAAAAAAAAAAAAAAAAAAIsnVgEAAAAAGFFezP7OBPMN6jPaJGGgL4jNeIY%3DTv3Cui11zHu5i92HM9WwaH2X6z5pyNat9qATsbqB3qQ9cv7GOr')->get('https://api.twitter.com/2/users/by/username/bbpp_bk');
        // $response = $request->object();
        // $twitter = $response->data;
        // // channelsinfo
        // $request = Http::get('https://www.googleapis.com/youtube/v3/channels', [
        //     'id' => 'UCx9t3TUybwKjPEhD26ONOsA',
        //     'key' => 'AIzaSyAuGEiC11whFWxlndJWsAo8FbiZSDoJhIE',
        //     'part' => 'snippet,statistics'
        // ]);
        // $response = $request->json();
        // // return $response;
        // $subs = $response['items'][0]['statistics']['viewCount'];
        // // $subs = 'NaN';
        // $channelsInfo = new stdClass;
        // $channelsInfo->name = $response['items'][0]['snippet']['title'];
        // $channelsInfo->img = $response['items'][0]['snippet']['thumbnails']['medium']['url'];
        // $channelsInfo->subs = ($subs >= 1000000 ? number_format($subs/1000000, 2, '.', ',') ." jt" : ($subs > 1000 ? number_format($subs/1000, 2, '.', ',') ." rb" : $subs));
        // // return $channelsInfo;
        // // latest Video
        // $latestVideo = $this->getYoutubeData();
        
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
        $info_pelatihan = TrainingInfo::where('is_active',1)
            ->latest()
            ->take(6)
            ->get();
        $visitor = RouteVisitor::get();

        // return view('home', compact('slider', 'news', 'news_pertanian', 'news_pelatihan', 'lang', 'maklumat', 'visitor', 'info_pelatihan', 'channelsInfo','latestVideo', 'twitter'));
        return view('home', compact('slider', 'news', 'news_pertanian', 'news_pelatihan', 'lang', 'maklumat', 'visitor','info_pelatihan'));
    }


    public function getYoutubeData($nextToken = ''){
        $token = $nextToken;
        $request = Http::get('https://www.googleapis.com/youtube/v3/search', [
            'channelId' => 'UCx9t3TUybwKjPEhD26ONOsA',
            'key' => 'AIzaSyAuGEiC11whFWxlndJWsAo8FbiZSDoJhIE',
            'part' => 'snippet,statistics',
            'maxResult' => '5',
            'order' => 'date',
            'part' => 'snippet',
            'pageToken' => $token
        ]);
        $response = $request->object();
        return $response;
    }


    public function rate(Request $request){
        $id = session('unique_id');
        if (!$rating = Rating::where('id_visitor',$id)->first()){
            Rating::create([
                'id_visitor' => $id,
                'rate' => $request->rate
            ]);
        } else {
            $rating->rate = $request->rate;
            $rating->save();
        }
        return back()->with('rate_message','thanks_for_rating');
    }
}
