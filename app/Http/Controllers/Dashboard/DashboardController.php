<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use GuzzleHttp\Client;

class DashboardController extends Controller
{
    public $breadcrumbs = [];

    public function __construct()
    {
        $this->breadcrumbs[] = [
            'label' => 'home',
            'url' => route('dashboard')
        ];
    }

    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }

    public function getDataCovid()
    {
        $client = new Client();
        try {
            $req = $client->request('get', 'https://api.kawalcorona.com/indonesia');
        } catch (\Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
        $res = json_decode($req->getBody());
        return response()->json($res[0]);
    }

    public function getRating(){
        $rating = Rating::groupBy('rate')->selectRaw('count(rate) AS count_rate, rate')->get();
        $data = [
            'rate_1' => 0,
            'rate_2' => 0,
            'rate_3' => 0,
            'rate_4' => 0
        ];
        foreach ($rating AS $rate){
            $data['rate_'.$rate->rate] = $rate->count_rate;
        }
        return response()->json($data);
    }

}
