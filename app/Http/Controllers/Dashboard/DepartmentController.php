<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartmentController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Bagian / Bidang',
            'url' => route('dashboard.bagian')
        ];
    }

    public function index()
    {
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Bagian / Bidang';
        $data = Department::get();
        return view('admin.pages.bagian.index', compact('title', 'breadcrumbs','data'));
    }

    public function add()
    {
        $this->breadcrumbs[] = [
            'label' => 'Tambah Slider',
            'url' => route('dashboard.bagian.add')
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Bagian / Bidang';
        $data = new Department();
        $action = route('dashboard.bagian');
        $method = 'post';
        $redirect = route('dashboard.bagian');
        return view('admin.pages.bagian.form', compact('breadcrumbs', 'title','data','action','method','redirect'));
    }

    public function edit($id){
        $this->breadcrumbs[] = [
            'label' => 'Edit Bagian / Bidang',
            'url' => route('dashboard.bagian.edit',$id)
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Bagian / Bidang';
        if (!$data = Department::find($id)){
            return abort(404,'Not Found');
        }
        $action = route('dashboard.bagian.edit',$id);
        $method = 'post';
        $redirect = route('dashboard.bagian');
        return view('admin.pages.bagian.form', compact('breadcrumbs', 'title','data','action','method','redirect'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'department' => 'required',
            'department_en' => '',
            'order_id' => '',
            'is_active' => 'boolean|required'
        ]);
        try {
            DB::beginTransaction();
            Department::create($data);
        } catch (\Exception $exception){
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Bagian / Bidang'
        ]);
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'department' => 'required',
            'department_en' => '',
            'order_id' => '',
            'is_active' => 'boolean|required'
        ]);
        try {
            DB::beginTransaction();
            if (!$model = Department::find($id)){
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
            'message' => 'Berhasil Mengupdate Bagian / Bidang'
        ]);
    }

    public function delete($id){
        if (!$model = Department::find($id)){
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
