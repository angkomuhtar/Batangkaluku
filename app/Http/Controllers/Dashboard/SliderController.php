<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends DashboardController
{
    protected $image_path = 'slider';

    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Slider',
            'url' => route('dashboard.slider')
        ];
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Slider';
        $data = Slider::get();
        return view('admin.pages.slider.index', compact('title', 'breadcrumbs', 'data'));
    }

    public function add()
    {
        $this->breadcrumbs[] = [
            'label' => 'Tambah Slider',
            'url' => route('dashboard.slider.add')
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Slider';
        $data = new Slider();
        $action = route('dashboard.slider');
        $method = 'post';
        $redirect = route('dashboard.slider');
        return view('admin.pages.slider.form', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect'));
    }

    public function edit($id)
    {
        $this->breadcrumbs[] = [
            'label' => 'Edit Slider',
            'url' => route('dashboard.slider.edit', $id)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Slider';
        if (!$data = Slider::find($id)) {
            return abort(404, 'Not Found');
        }
        $action = route('dashboard.slider.edit', $id);
        $method = 'post';
        $redirect = route('dashboard.slider');
        return view('admin.pages.slider.form', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect'));
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image',
            'text_header' => '',
            'text_content' => '',
            'text_header_en' => '',
            'text_content_en' => '',
            'order_id' => '',
            'url' => '',
            'is_active' => 'boolean|required'
        ]);
        if ($data['image']) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path, 'slider_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            Slider::create($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Slider'
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'image' => 'image',
            'text_header' => '',
            'text_content' => '',
            'text_header_en' => '',
            'text_content_en' => '',
            'order_id' => '',
            'url' => '',
            'is_active' => 'boolean|required'
        ]);
        if (isset($data['image'])) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path, 'slider_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            if (!$model = Slider::find($id)) {
                return abort(404, 'Not Found');
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
            'message' => 'Berhasil Mengupdate Slider'
        ]);
    }

    public function delete($id)
    {
        if (!$model = Slider::find($id)) {
            return abort(404, 'Not Found');
        }
        try {
            $model->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data! <br><i>' . $exception->getMessage() . '</i>');
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }

}
