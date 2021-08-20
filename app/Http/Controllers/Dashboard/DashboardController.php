<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

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

    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function getDataCovid(){
        $client = new Client();
        try {
            $req = $client->request('get', 'https://api.kawalcorona.com/indonesia');
        } catch (\Exception $exception){
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        $res = json_decode($req->getBody());
        return response()->json($res[0]);
    }

}
