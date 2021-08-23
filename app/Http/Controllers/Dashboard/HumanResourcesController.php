<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Department;
use App\Models\HumanResources;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HumanResourcesController extends DashboardController
{
    protected $image_path = 'sdm';
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Sumber Daya Manusia',
            'url' => route('dashboard.sdm')
        ];
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Sumber Daya Manusia';
        $data = HumanResources::with('department')->get();
        return view('admin.pages.sdm.index', compact('title', 'breadcrumbs','data'));
    }

    public function add()
    {
        $this->breadcrumbs[] = [
            'label' => 'Tambah Sumber Daya Manusia',
            'url' => route('dashboard.sdm.add')
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Sumber Daya Manusia';
        $data = new HumanResources();
        $action = route('dashboard.sdm');
        $method = 'post';
        $redirect = route('dashboard.sdm');
        $department = Department::where('is_active',1)->orderBy('order_id')->get();
        return view('admin.pages.sdm.form', compact('breadcrumbs', 'title','data','action','method','redirect','department'));
    }

    public function edit($id){
        $this->breadcrumbs[] = [
            'label' => 'Edit Sumber Daya Manusia',
            'url' => route('dashboard.sdm.edit',$id)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Sumber Daya Manusia';
        if (!$data = HumanResources::find($id)){
            return abort(404,'Not Found');
        }
        $action = route('dashboard.sdm.edit',$id);
        $method = 'post';
        $redirect = route('dashboard.sdm');
        $department = Department::where('is_active',1)->orderBy('order_id')->get();
        return view('admin.pages.sdm.form', compact('breadcrumbs', 'title','data','action','method','redirect','department'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'department_id' => 'required',
            'image' => 'required|image',
            'name' => 'required',
            'nip' => 'required',
            'position' => 'required',
            'position_en' => '',
            'level_id' => 'required',
            'order_id' => 'required',
            'is_active' => 'boolean|required'
        ]);
        if ($data['image']){
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path,'slider_'.date('YmdHis').'.'.$ext,'public');
        }
        try {
            DB::beginTransaction();
            HumanResources::create($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Sumber Daya Manusia'
        ]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'department_id' => 'required',
            'image' => 'image',
            'name' => 'required',
            'nip' => 'required',
            'position' => 'required',
            'position_en' => '',
            'level_id' => 'required',
            'order_id' => 'required',
            'is_active' => 'boolean|required'
        ]);
        if (isset($data['image'])){
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path,'slider_'.date('YmdHis').'.'.$ext,'public');
        }
        try {
            DB::beginTransaction();
            if (!$model = HumanResources::find($id)){
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
            'message' => 'Berhasil Mengupdate Sumber Daya Manusia'
        ]);
    }

    public function delete($id){
        if (!$model = HumanResources::find($id)){
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
