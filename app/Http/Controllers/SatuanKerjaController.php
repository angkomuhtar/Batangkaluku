<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use App\Models\Page;
use App\Models\RouteVisitor;
use App\Models\TrainingInfo;
use Illuminate\Http\Request;

class SatuanKerjaController extends Controller
{
    public function index($service){
        $lang = request()->query('lang','id');
        if (!$data = Page::with('pageAttachments')
            ->where('type','satuan_kerja')
            ->where('name', $service)->first()) {
            $data = Page::create([
                'name' => $service,
                'title' => '',
                'content' => '',
                'type' => 'satuan_kerja'
            ]);
        }
        $visitor = RouteVisitor::get();
        return view('satker.index',compact('lang','data','visitor'));
    }}
