<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Konten',
            'url' => '#'
        ];
    }

    public function edit($type){
        if (!$data = Content::where('name',$type)->first()){
            $data = Content::create([
                'name' => $type,
                'content' => '',
            ]);
        }
        $this->breadcrumbs[] = [
            'label' => 'Edit Konten '.$data->name_str,
            'url' => route('dashboard.konten.edit',$type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Konten '.$data->name_str;
        $action = route('dashboard.konten.edit',$type);
        $method = 'put';
        return view('admin.pages.konten.form', compact('breadcrumbs', 'title','data','action','method'));
    }

    public function update(Request $request, $type){
        $data = $request->validate([
            'content' => 'required',
            'content_en' => '',
        ]);
        $data['name'] = $type;
        try {
            DB::beginTransaction();
            $model = Content::where('name',$type)->first();
            $model->update($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ]);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Konten'
        ]);
    }
}
