<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Department;
use App\Models\RouteVisitor;

class LembagaController extends Controller
{
    public function tentang()
    {
        $lang = request()->query('lang', 'id');
        $data = Content::where('name', 'tentang_kami')->first();
        $visitor = RouteVisitor::get();
        return view('lembaga.tentang', compact('lang', 'data', 'visitor'));
    }

    public function struktur()
    {
        $lang = request()->query('lang', 'id');
        $data = Content::where('name', 'struktur_organisasi')->first();
        $visitor = RouteVisitor::get();
        return view('lembaga.struktur', compact('lang', 'data', 'visitor'));
    }

    public function sdm()
    {
        $lang = request()->query('lang', 'id');
        $bagian = Department::with('humanResources')->where('is_active', 1)->orderBy('order_id')->get();
        $visitor = RouteVisitor::get();
        return view('lembaga.sdm', compact('lang', 'bagian', 'visitor'));
    }
}
