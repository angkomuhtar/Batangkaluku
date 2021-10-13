<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends DashboardController
{
    protected $foto_path = 'gallery/foto';
    protected $video_path = 'gallery/video';

    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Gallery',
            'url' => '#'
        ];
    }

    public function index($type)
    {
        $this->breadcrumbs[] = [
            'label' => $type,
            'url' => route('dashboard.gallery', $type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Gallery ' . ucwords($type);
        $data = Gallery::where('type', $type)->get();
        return view('admin.pages.gallery.index', compact('title', 'breadcrumbs', 'data', 'type'));
    }

    public function add($type)
    {
        $this->breadcrumbs[] = [
            'label' => $type,
            'url' => route('dashboard.gallery', $type)
        ];
        $this->breadcrumbs[] = [
            'label' => 'Tambah ' . $type,
            'url' => route('dashboard.gallery.add', $type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Gallery ' . ucwords($type);
        $data = new Article();
        $action = route('dashboard.gallery', $type);
        $method = 'post';
        $redirect = route('dashboard.gallery', $type);
        return view('admin.pages.gallery.form', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'type'));
    }

    public function edit($type, $id)
    {
        $this->breadcrumbs[] = [
            'label' => $type,
            'url' => route('dashboard.gallery', $type)
        ];
        $this->breadcrumbs[] = [
            'label' => 'Edit Gallery ' . $type,
            'url' => route('dashboard.gallery.edit', ['type' => $type, 'id' => $id])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Gallery ' . ucwords($type);
        if (!$data = Gallery::where('type', $type)->find($id)) {
            return abort(404, 'Not Found');
        }
        $action = route('dashboard.gallery.edit', ['type' => $type, 'id' => $id]);
        $method = 'post';
        $redirect = route('dashboard.gallery', $type);
        return view('admin.pages.gallery.form', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'type'));
    }

    public function create(Request $request, $type)
    {
        $data = $request->validate([
            'title' => 'required',
            'title_en' => '',
            'content' => 'required|file',
            'is_active' => 'boolean|required'
        ]);
        $data['type'] = $type;
        if ($data['content']) {
            $ext = $request->file('content')->getClientOriginalExtension();
            $data['content'] = $request->file('content')->storeAs($this->{$type . "_path"}, $type . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            Gallery::create($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah ' . ucwords($type)
        ]);
    }

    public function update(Request $request, $type, $id)
    {
        $data = $request->validate([
            'title' => 'required',
            'title_en' => '',
            'content' => 'file',
            'is_active' => 'boolean|required'
        ]);
        $data['type'] = $type;
        if (isset($data['content'])) {
            $ext = $request->file('content')->getClientOriginalExtension();
            $data['content'] = $request->file('content')->storeAs($this->{$type . "_path"}, $type . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            if (!$model = Gallery::where('type', $type)->find($id)) {
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
            'message' => 'Berhasil Mengupdate ' . ucwords($type)
        ]);
    }

    public function delete($type, $id)
    {
        if (!$model = Gallery::where('type', $type)->find($id)) {
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
