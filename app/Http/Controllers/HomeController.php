<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Content;
use App\Models\RouteVisitor;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $lang = request()->query('lang','id');
        $maklumat = Content::where('name','maklumat')->first();
        $slider = Slider::where('is_active',1)->orderBy('order_id')->get();
        $news = Article::where('is_active',1)
            ->where('published_time','<=',now())
            ->orderBy('published_time','desc')
            ->take(6)
            ->get();
        $news_pertanian = Article::where('is_active',1)
            ->where('type','pertanian')
            ->where('published_time','<=',now())
            ->orderBy('published_time','desc')
            ->take(4)
            ->get();
        $news_pelatihan = Article::where('is_active',1)
            ->where('type','pelatihan')
            ->where('published_time','<=',now())
            ->orderBy('published_time','desc')
            ->take(6)
            ->get();
        $visitor = RouteVisitor::get();
        return view('home',compact('slider','news','news_pertanian','news_pelatihan','lang','maklumat','visitor'));
    }
}
