<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\TrainingInfo;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index($service){
        $lang = request()->query('lang','id');
        if (!$data = Page::with('pageAttachments')->where('name', $service)->first()) {
            $data = Page::create([
                'name' => $service,
                'title' => '',
                'content' => '',
                'type' => 'layanan_dan_informasi'
            ]);
        }
        if ($service === 'info_pelatihan'){
            $training = TrainingInfo::where('is_active',1)->paginate(6);
            return view('layanan.info-pelatihan',compact('lang','data','training'));
        }
        return view('layanan.index',compact('lang','data'));
    }
}
