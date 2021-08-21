<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends DashboardController
{
    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'user',
            'url' => route('dashboard.user')
        ];
    }

    public function index(){
        $title = 'BBPP Batangkaluku - User';
        $breadcrumbs = $this->breadcrumbs;
        $data = User::where('id','!=',auth()->user()->id)->get();
        return view('admin.pages.user.index',compact('data','breadcrumbs','title'));
    }

    public function add(){
        $title = 'BBPP Batangkaluku - Tambah User';
        $this->breadcrumbs[] = [
            'label' => 'tambah user',
            'url' => route('dashboard.user.add')
        ];
        $breadcrumbs = $this->breadcrumbs;
        $data = new User();
        $action = route('dashboard.user');
        $method = 'post';
        $redirect = route('dashboard.user');
        return view('admin.pages.user.form',compact('data','action','method','redirect','breadcrumbs','title'));
    }

    public function edit($id){
        $title = 'BBPP Batangkaluku - Edit User';
        $this->breadcrumbs[] = [
            'label' => 'edit user',
            'url' => route('dashboard.user.edit',$id)
        ];
        $breadcrumbs = $this->breadcrumbs;
        if (!$data = User::where('id','!=',auth()->user()->id)->find($id)){
            return abort(404,'Not Found');
        }
        $action = route('dashboard.user.edit',$data);
        $method = 'put';
        $redirect = route('dashboard.user');
        return view('admin.pages.user.form',compact('data','action','method','redirect','breadcrumbs','title'));
    }

    public function create(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        $data['password'] = bcrypt($data['password']);
        try {
            User::create($data);
        } catch (\Exception $exception){
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        return response()->json([
            'message' => 'User Berhasil Ditambah'
        ]);
    }

    public function update(Request $request,$id){
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'confirmed'
        ]);
        if ($data['password']){
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        try {
            if (!$item = User::where('id','!=',auth()->user()->id)->find($id)){
                return abort(404,'Not Found');
            }
            $item->update($data);
        } catch (\Exception $exception){
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        return response()->json([
            'message' => 'User Berhasil Diubah'
        ]);
    }

    public function delete($id){
        if (!$data = User::where('id','!=',auth()->user()->id)->find($id)){
            return abort(404,'Not Found');
        }
        try {
            $data->delete();
        }catch (\Exception $exception){
            return redirect()->back()->with('error','Gagal Menghapus Data! <br><i>'. $exception->getMessage().'</i>');
        }
        return redirect()->back()->with('success','Berhasil Menghapus Data');
    }
}
