<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Officer;
use App\Models\Page;
use App\Models\PageAttachment;
use App\Models\TrainingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PageController extends DashboardController
{
    protected $attachment_path = 'attachment';
    protected $image_path = 'training';

    public function __construct()
    {
        parent::__construct();
        $this->breadcrumbs[] = [
            'label' => 'Page',
            'url' => '#'
        ];
    }

    public function edit($type, $name)
    {
        if (!$data = Page::with('pageAttachments')->where('name', $name)->first()) {
            $data = Page::create([
                'name' => $name,
                'title' => '',
                'content' => '',
                'type' => $type
            ]);
        }
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $data->name_str,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Halaman ' . $data->name_str;
        $action = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        $method = 'put';
        $pelatihan = new Collection();
        $pejabat = new Collection();
        if ($name === 'info_pelatihan'){
            $pelatihan = TrainingInfo::get();
        }
        if ($name === 'pejabat_LHKPN_-_LHKASN'){
            $pejabat = Officer::get();
        }
        return view('admin.pages.page.form', compact('breadcrumbs', 'title', 'data', 'action', 'method','pelatihan','pejabat'));
    }

    public function update(Request $request, $type, $name)
    {
        $data = $request->validate([
            'title' => 'required',
            'title_en' => '',
            'content' => '',
            'content_en' => '',
        ]);
        $data['type'] = $type;
        $data['name'] = $name;
        try {
            DB::beginTransaction();
            $model = Page::where('name', $name)->first();
            $model->update($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Halaman'
        ]);
    }

    public function addAttachment($type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Tambah Lampiran ' . $new_name,
            'url' => route('dashboard.page.attachment.add', ['type' => $type, 'name' => $name])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Lampiran ' . $new_name;
        $data = new PageAttachment();
        $action = route('dashboard.page.attachment.add', ['type' => $type, 'name' => $name]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.attachment', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function editAttachment($type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Edit Lampiran ' . $new_name,
            'url' => route('dashboard.page.attachment.edit', ['type' => $type, 'name' => $name, 'id' => $id])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Lampiran ' . $new_name;
        $data = PageAttachment::whereHas('page', function ($q) use ($type, $name) {
            $q->where('name', $name);
            $q->where('type', $type);
        })->find($id);
        $action = route('dashboard.page.attachment.edit', ['type' => $type, 'name' => $name, 'id' => $id]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.attachment', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function createAttachment(Request $request, $type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'name' => 'required',
            'name_en' => '',
            'attachment' => 'required|file',
            'is_active' => 'boolean|required'
        ]);
        if ($data['attachment']) {
            $ext = $request->file('attachment')->getClientOriginalExtension();
            $data['attachment'] = $request->file('attachment')->storeAs($this->attachment_path, $name . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            $page = Page::where('name', $name)->first();
            $page->pageAttachments()->create($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Lampiran ' . $new_name
        ]);
    }

    public function updateAttachment(Request $request, $type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'name' => 'required',
            'name_en' => '',
            'attachment' => 'file',
            'is_active' => 'boolean|required'
        ]);
        if (isset($data['attachment'])) {
            $ext = $request->file('attachment')->getClientOriginalExtension();
            $data['attachment'] = $request->file('attachment')->storeAs($this->attachment_path, $name . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            $model = PageAttachment::whereHas('page', function ($q) use ($type, $name) {
                $q->where('name', $name);
                $q->where('type', $type);
            })->find($id);
            $model->update($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Lampiran ' . $new_name
        ]);
    }

    public function deleteAttachment($type, $name, $id)
    {
        $model = PageAttachment::whereHas('page', function ($q) use ($type, $name) {
            $q->where('name', $name);
            $q->where('type', $type);
        })->find($id);
        try {
            $model->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data! <br><i>' . $exception->getMessage() . '</i>');
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }

    public function addTraining($type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Tambah Pelatihan',
            'url' => route('dashboard.page.training.add', ['type' => $type, 'name' => $name])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Pelatihan';
        $data = new TrainingInfo();
        $action = route('dashboard.page.training.add', ['type' => $type, 'name' => $name]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.training', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function editTraining($type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Edit Pelatihan',
            'url' => route('dashboard.page.training.edit', ['type' => $type, 'name' => $name, 'id' => $id])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Pelatihan ';
        $data = TrainingInfo::find($id);
        $action = route('dashboard.page.training.edit', ['type' => $type, 'name' => $name, 'id' => $id]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.training', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function createTraining(Request $request, $type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'image' => 'required|image',
            'title' => 'required',
            'title_en' => '',
            'description' => '',
            'description_en' => '',
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => '',
            'location' => 'required',
            'embed' => '',
            'is_active' => 'boolean|required'
        ]);
        if ($data['image']) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path, $data['title'] . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            TrainingInfo::create($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Pelatihan '
        ]);
    }

    public function updateTraining(Request $request, $type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'image' => 'image',
            'title' => 'required',
            'title_en' => '',
            'description' => '',
            'description_en' => '',
            'date' => 'required',
            'time_start' => 'required',
            'time_end' => '',
            'location' => 'required',
            'embed' => '',
            'is_active' => 'boolean|required'
        ]);
        if (isset($data['image'])) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $data['image'] = $request->file('image')->storeAs($this->image_path, $data['title'] . '_' . date('YmdHis') . '.' . $ext, 'public');
        }
        try {
            DB::beginTransaction();
            $model = TrainingInfo::find($id);
            $model->update($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Pelatihan'
        ]);
    }

    public function deleteTraining($type, $name, $id)
    {
        $model = TrainingInfo::find($id);
        try {
            $model->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data! <br><i>' . $exception->getMessage() . '</i>');
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }

    public function addOfficer($type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Tambah Pejabat LHKPN / LHKASN',
            'url' => route('dashboard.page.training.add', ['type' => $type, 'name' => $name])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Tambah Pejabat LHKPN / LHKASN';
        $data = new Officer();
        $action = route('dashboard.page.officer.add', ['type' => $type, 'name' => $name]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.officer', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function editOfficer($type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $this->breadcrumbs[] = [
            'label' => 'Halaman ' . $new_name,
            'url' => route('dashboard.page.edit', ['type' => $type, 'name' => $name])
        ];
        $this->breadcrumbs[] = [
            'label' => 'Edit Pejabat LHKPN / LHKASN',
            'url' => route('dashboard.page.officer.edit', ['type' => $type, 'name' => $name, 'id' => $id])
        ];
        $breadcrumbs = $this->breadcrumbs;
        $title = 'BBPP Batangkaluku - Edit Pejabat LHKPN / LHKASN ';
        $data = Officer::find($id);
        $action = route('dashboard.page.officer.edit', ['type' => $type, 'name' => $name, 'id' => $id]);
        $method = 'post';
        $redirect = route('dashboard.page.edit', ['type' => $type, 'name' => $name]);
        return view('admin.pages.page.officer', compact('breadcrumbs', 'title', 'data', 'action', 'method', 'redirect', 'new_name'));
    }

    public function createOfficer(Request $request, $type, $name)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'rank' => 'required',
            'rank_en' => '',
            'position' => 'required',
            'position_en' => '',
            'is_active' => 'boolean|required'
        ]);
        try {
            DB::beginTransaction();
            Officer::create($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Menambah Pejabat LHKPN / LHKASN '
        ]);
    }

    public function updateOfficer(Request $request, $type, $name, $id)
    {
        $new_name = ucwords(str_replace('-', '/', str_replace('_', ' ', $name)));
        $data = $request->validate([
            'name' => 'required',
            'nip' => 'required',
            'rank' => 'required',
            'rank_en' => '',
            'position' => 'required',
            'position_en' => '',
            'is_active' => 'boolean|required'
        ]);
        try {
            DB::beginTransaction();
            $model = Officer::find($id);
            $model->update($data);
        } catch (\Exception $exception) {
            DB::rollBack();
            return response()->json([
                'message' => $exception->getMessage()
            ],500);
        }
        DB::commit();
        return response()->json([
            'message' => 'Berhasil Mengupdate Pejabat LHKPN / LHKASN'
        ]);
    }

    public function deleteOfficer($type, $name, $id)
    {
        $model = Officer::find($id);
        try {
            $model->delete();
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data! <br><i>' . $exception->getMessage() . '</i>');
        }
        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
}
