<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\RouteVisitor;

class ArtikelController extends Controller
{
    public function index($type)
    {
        $lang = request()->query('lang', 'id');
        $data = Article::where('is_active', 1)
            ->where('type', $type)
            ->where('published_time', '<=', now())
            ->orderBy('published_time', 'desc')
            ->paginate(6);
        $visitor = RouteVisitor::get();
        return view('artikel.index', compact('lang', 'data', 'visitor'));
    }

    public function detail($type, $id, $title)
    {
        $lang = request()->query('lang', 'id');
        $data = Article::where('is_active', 1)
            ->where('type', $type)
            ->where('published_time', '<=', now())
            ->find($id);
        $visitor = RouteVisitor::get();
        $news = Article::where('is_active', 1)
            ->where('type', $type)
            ->where('id','!=',$id)
            ->take(3)
            ->inRandomOrder()
            ->get();
        return view('artikel.detail', compact('lang', 'data', 'visitor','news'));
    }
}
