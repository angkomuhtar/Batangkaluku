<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContentController extends DashboardController
{
    protected $image_path = 'konten';
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Konten',
            'url' => '#'
        ];
    }

    public function edit($type)
    {
        if (!$data = Content::where('name', $type)->first()) {
            $data = Content::create([
                'name' => $type,
                'content' => '',
            ]);
        }
        $this->breadcrumbs[] = [
            'label' => 'Edit Konten ' . $data->name_str,
            'url' => route('dashboard.konten.edit', $type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Konten ' . $data->name_str;
        $action = route('dashboard.konten.edit', $type);
        $method = 'put';
        if ($type == 'struktur_organisasi'){
            return view('admin.pages.konten.form_image', compact('breadcrumbs', 'title', 'data', 'action', 'method'));
        }
        return view('admin.pages.konten.form', compact('breadcrumbs', 'title', 'data', 'action', 'method'));
    }

    public function update(Request $request, $type)
    {
        $data = $request->validate([
            'content' => 'required',
            'content_en' => '',
            'is_image' => ''
        ]);
        $data['name'] = $type;
        try {
            DB::beginTransaction();
            if (!$model = Content::where('name', $type)->first()) {
                return abort(404, 'Not Found');
            }
            if ($type == 'struktur_organisasi'){
                $ext = $request->file('content')->getClientOriginalExtension();
                $data['content'] = $request->file('content')->storeAs($this->image_path, 'sturktur_organisasi' . date('YmdHis') . '.' . $ext, 'public');
                $data['content_en'] = $data['content'];
            }
            $model->update($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Konten'
        ]);
    }
}
