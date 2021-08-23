<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends DashboardController
{
    protected $image_path = 'artikel';
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Artikel',
            'url' => '#'
        ];
    }

    public function index($type)
    {
        $this->breadcrumbs[] = [
            'label' => 'Artikel '.$type,
            'url' =>  route('dashboard.artikel',$type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Artikel '.ucwords($type);
        $data = Article::where('type',$type)->get();
        return view('admin.pages.artikel.index', compact('title', 'breadcrumbs','data','type'));
    }

    public function add($type)
    {
        $this->breadcrumbs[] = [
            'label' => 'Artikel '.$type,
            'url' =>  route('dashboard.artikel',$type)
        ];
        $this->breadcrumbs[] = [
            'label' => 'Tambah Artikel '.ucwords($type),
            'url' => route('dashboard.artikel.add',$type)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Artikel '.ucwords($type);
        $data = new Article();
        $action = route('dashboard.artikel',$type);
        $method = 'post';
        $redirect = route('dashboard.artikel',$type);
        return view('admin.pages.artikel.form', compact('breadcrumbs', 'title','data','action','method','redirect','type'));
    }

    public function edit($type, $id){
        $this->breadcrumbs[] = [
            'label' => 'Artikel '.$type,
            'url' =>  route('dashboard.artikel',$type)
        ];
        $this->breadcrumbs[] = [
            'label' => 'Edit Artikel '.$type,
            'url' => route('dashboard.artikel.edit',['type' => $type, 'id' => $id])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Artikel '.ucwords($type);
        if (!$data = Article::where('type',$type)->find($id)){
            return abort(404,'Not Found');
        }
        $action = route('dashboard.artikel.edit',['type' => $type, 'id' => $id]);
        $method = 'post';
        $redirect = route('dashboard.artikel', $type);
        return view('admin.pages.artikel.form', compact('breadcrumbs', 'title','data','action','method','redirect','type'));
    }

    public function create(Request $request,$type){
        $data = $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'title_en' => '',
            'description' => 'required',
            'description_en' => '',
            'content' => 'required',
            'content_en' => '',
            'source' => '',
            'creator' => 'required',
            'published_time' => 'required',
            'is_active' => 'boolean|required'
        ]);
        $data['type'] = $type;
        if ($data['image']){
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path,'article_'.date('YmdHis').'.'.$ext,'public');
        }
        try {
            DB::beginTransaction();
            Article::create($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Artikel'
        ]);
    }

    public function update(Request $request,$type, $id){
        $data = $request->validate([
            'image' => 'image',
            'title' => 'required',
            'title_en' => '',
            'description' => 'required',
            'description_en' => '',
            'content' => 'required',
            'content_en' => '',
            'source' => '',
            'creator' => 'required',
            'published_time' => 'required',
            'is_active' => 'boolean|required'
        ]);
        $data['type'] = $type;
        if (isset($data['image'])){
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path,'article_'.date('YmdHis').'.'.$ext,'public');
        }
        try {
            DB::beginTransaction();
            if (!$model = Article::where('type',$type)->find($id)){
                return abort(404,'Not Found');
            }
            $model->update($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Artikel'
        ]);
    }

    public function delete($type, $id){
        if (!$model = Article::where('type',$type)->find($id)){
            return abort(404,'Not Found');
        }
        try {
            $model->delete();
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Gagal Menghapus Data! <br><i>'. $exception->getMessage().'</i>');
        }
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }

}
