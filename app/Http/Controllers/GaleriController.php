<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function photo(){
        $lang = request()->query('lang', 'id');
        $data = Gallery::where('type','foto')->where('is_active',1)->orderBy('created_at','desc')->get();
        return view('galeri.photo',compact('lang','data'));
    }

    public function video(){
        $lang = request()->query('lang', 'id');
        $data = Gallery::where('type','video')->where('is_active',1)->orderBy('created_at','desc')->get();
        return view('galeri.video',compact('lang','data'));

    }
}
