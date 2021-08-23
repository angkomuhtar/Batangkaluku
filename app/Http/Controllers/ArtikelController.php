<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index($type){
        $lang = request()->query('lang', 'id');
        $data = Article::where('is_active',1)
            ->where('type',$type)
            ->where('published_time','<=',now())
            ->orderBy('published_time','desc')
            ->paginate(6);
        return view('artikel.index',compact('lang','data'));
    }

    public function detail($type,$id,$title){
        $lang = request()->query('lang', 'id');
        $data = Article::where('is_active',1)
            ->where('type',$type)
            ->where('published_time','<=',now())
            ->find($id);

        return view('artikel.detail',compact('lang','data'));
    }
}
