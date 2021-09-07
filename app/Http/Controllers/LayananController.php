<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use App\Models\Page;
use App\Models\RouteVisitor;
use App\Models\TrainingInfo;

class LayananController extends Controller
{
    public function index($service)
    {
        $lang = request()->query('lang', 'id');
        if (!$data = Page::with('pageAttachments')
            ->where('type', 'layanan_dan_informasi')
            ->where('name', $service)->first()) {
            $data = Page::create([
                'name' => $service,
                'title' => '',
                'content' => '',
                'type' => 'layanan_dan_informasi'
            ]);
        }
        $visitor = RouteVisitor::get();
        if ($service === 'info_pelatihan') {
            $training = TrainingInfo::where('is_active', 1)->paginate(6);
            return view('layanan.info-pelatihan', compact('lang', 'data', 'training', 'visitor'));
        }
        if ($service === 'pejabat_LHKPN_-_LHKASN') {
            $pejabat = Officer::where('is_active', 1)->get();
            return view('layanan.pejabat', compact('lang', 'data', 'pejabat', 'visitor'));
        }
        return view('layanan.index', compact('lang', 'data', 'visitor'));
    }
}
