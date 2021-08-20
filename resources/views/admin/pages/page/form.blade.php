@extends('admin.app')
@section('meta-title',$title ?? 'BBPP Batangkaluku')
{{--@section('meta-keywords','');--}}
{{--@section('meta-author','');--}}
{{--@section('meta-description','');--}}
@push('addon-style')
@endpush
@section('content')
    <div class="element-wrapper">
        <div class="element-box">
            <form id="formValidate" action="{{$action}}" method="post" enctype="multipart/form-data">
                @method($method)
                <h5 class="form-header">
                    {{$data->name_str}}
                </h5>
                <div class="form-desc">

                </div>
                <div class="row">
                    <div class="col-6 border-right">
                        <fieldset class="form-group">
                            <legend><span>Konten Bahasa Indonesia</span></legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Judul Halaman *</label>
                                        <input name="title" type="text" class="form-control"
                                               data-error="judul halaman is required"
                                               value="{{$data->title ?? old('title')}}"
                                               required>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Deskripsi </label>
                                        <textarea id="content" class="form-control"
                                                  name="content"
                                                  data-error="konten is required"
                                                  placeholder="Konten"
                                        >{{$data->content ?? old('content')}}</textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-6">
                        <fieldset class="form-group">
                            <legend><span>Konten Bahasa Inggris</span></legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Judul Halaman</label>
                                        <input name="title_en" type="text" class="form-control"
                                               data-error="judul halaman is required"
                                               value="{{$data->title_en ?? old('title_en')}}"
                                        >
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Deskripsi</label>
                                        <textarea id="content_en" class="form-control"
                                                  name="content_en"
                                                  data-error="konten is required"
                                                  placeholder="Konten"
                                        >{{$data->content_en ?? old('content_en')}}</textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit"> Simpan</button>
                </div>
            </form>
        </div>
        @if ($data->name === 'info_pelatihan')
            <div class="element-box">
                <h5 class="form-header">
                    Daftar Pelatihan
                </h5>
                <div class="form-desc">
                    &nbsp;
                    <div class="pull-right">
                        <a href="{{route('dashboard.page.training.add',['type' => $data->type,'name' => $data->name])}}"
                           class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Pelatihan</a>
                    </div>
                </div>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{!!session('error')!!}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{{session('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Pelatihan</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Gambar</th>
                            <th>Nama Pelatihan</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Waktu</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($pelatihan AS $row)
                            <tr>
                                <td>
                                    <img src="{{asset('storage/'.$row->image)}}" alt="{{$row->image}}"
                                         style="max-width: 300px">
                                </td>
                                <td>
                                    <b>Bahasa Indonesia : </b><br>
                                    {!! $row->title ?? '-' !!}
                                    <br>
                                    <b>Bahasa Inggris : </b><br>
                                    {!! $row->title_en ?? '-' !!}
                                </td>
                                <td>
                                    {{$row->location}}
                                </td>
                                <td>
                                    {{$row->date}}
                                </td>
                                <td>
                                    {{$row->time_start}} - {{$row->time_end ?? 'selesai'}}
                                </td>
                                <td>
                                    <a href="{{route('dashboard.page.training.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                       class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" target="#delete-{{$row->id}}" class="btn btn-danger btn-delete"><i
                                            class="fa fa-trash"></i> Delete</a>
                                    <form id="delete-{{$row->id}}"
                                          action="{{route('dashboard.page.training.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                          method="post">
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @elseif ($data->name === 'pejabat_LHKPN_-_LHKASN')
            <div class="element-box">
                <h5 class="form-header">
                    Daftar Pejabat LHKPN / LHKASN
                </h5>
                <div class="form-desc">
                    &nbsp;
                    <div class="pull-right">
                        <a href="{{route('dashboard.page.officer.add',['type' => $data->type,'name' => $data->name])}}"
                           class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Pelatihan</a>
                    </div>
                </div>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{!!session('error')!!}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{{session('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat / Golongan</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Pangkat / Golongan</th>
                            <th>Jabatan</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($pejabat AS $row)
                            <tr>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td>
                                    {{$row->nip}}
                                </td>
                                <td>
                                    <b>Bahasa Indonesia : </b><br>
                                    {!! $row->rank ?? '-' !!}
                                    <br>
                                    <b>Bahasa Inggris : </b><br>
                                    {!! $row->rank_en ?? '-' !!}
                                </td>
                                <td>
                                    <b>Bahasa Indonesia : </b><br>
                                    {!! $row->position ?? '-' !!}
                                    <br>
                                    <b>Bahasa Inggris : </b><br>
                                    {!! $row->position_en ?? '-' !!}
                                </td>
                                <td>
                                    <a href="{{route('dashboard.page.officer.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                       class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" target="#delete-{{$row->id}}" class="btn btn-danger btn-delete"><i
                                            class="fa fa-trash"></i> Delete</a>
                                    <form id="delete-{{$row->id}}"
                                          action="{{route('dashboard.page.officer.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                          method="post">
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="element-box">
                <h5 class="form-header">
                    Lampiran {{$data->name_str}}
                </h5>
                <div class="form-desc">
                    &nbsp;
                    <div class="pull-right">
                        <a href="{{route('dashboard.page.attachment.add',['type' => $data->type,'name' => $data->name])}}"
                           class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah
                            Lampiran {{$data->name_str}}</a>
                    </div>
                </div>
                @if (session()->has('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{!!session('error')!!}
                    </div>
                @endif
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span
                                aria-hidden="true"> &times;</span></button>{{session('success')}}
                    </div>
                @endif
                <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                        <thead>
                        <tr>
                            <th>File</th>
                            <th>Tanggal Upload</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>File</th>
                            <th>Tanggal Upload</th>
                            <th></th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach ($data->pageAttachments AS $row)
                            <tr>
                                <td><a href="{{asset('storage/'.$row->attachment)}}" target="_blank"><i
                                            class="fa fa-file"></i> {{$row->name}}</a></td>
                                <td>{{$row->created_at}}</td>
                                <td>
                                    <a href="{{route('dashboard.page.attachment.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                       class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" target="#delete-{{$row->id}}" class="btn btn-danger btn-delete"><i
                                            class="fa fa-trash"></i> Delete</a>
                                    <form id="delete-{{$row->id}}"
                                          action="{{route('dashboard.page.attachment.edit',['type' => $data->type,'name' => $data->name,'id' => $row->id])}}"
                                          method="post">
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
@push('addon-script')
    <script>
        CKEDITOR.replace('content');
        CKEDITOR.replace('content_en');
        $('#formValidate').submit(function (e) {
            e.preventDefault();
            var item = $('#formValidate [required]');
            var valid = true;
            var action = $('#formValidate').attr('action');
            var form = this;
            var formData = new FormData(this);
            item.each(function (i, el) {
                if (!$(el).val()) {
                    valid = false;
                    return false;
                }
            })
            if (valid) {
                Swal.fire({
                    title: 'Submit Data ?',
                    // text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Yes'
                }).then((result) => {
                    if (result.isConfirmed) {
                        formData.set('content', CKEDITOR.instances.content.getData())
                        formData.set('content_en', CKEDITOR.instances.content_en.getData())
                        $.ajax({
                            url: action,
                            type: 'post',
                            data: formData,
                            processData: false,  // tell jQuery not to process the data
                            contentType: false,  // tell jQuery not to set contentType
                            success: function (data) {
                                console.log(data);
                                Swal.fire(
                                    'Success!',
                                    'Success Submit Data',
                                    'success'
                                )
                                setTimeout(function () {
                                    location.reload()
                                }, 1000)
                            },
                            error: function (err) {
                                console.log(err);
                                var er_json = err.responseJSON;
                                var error_message = er_json.message;
                                if (err.status === 422) {
                                    var error_validation = er_json.errors;
                                    for (var key in error_validation) {
                                        var input = $('#formValidate [name=' + key + ']');
                                        var parent = input.parent();
                                        var feedback = parent.find('.form-control-feedback')
                                        parent.addClass('has-error has-danger');
                                        feedback.html('');
                                        var error_show = ''
                                        error_validation[key].forEach(function (er) {
                                            error_show += '<li>' + er + '</li>'
                                        })
                                        feedback.html('<ul class="list-unstyled">' + error_show + '</ul>')
                                    }
                                }
                                Swal.fire(
                                    'Error !',
                                    error_message,
                                    'error'
                                )
                            }
                        });
                    }
                })
            }
        });
        $('document').ready(function () {
            $('.btn-delete').click(function (e) {
                e.preventDefault();
                var target = $(this).attr('target');
                Swal.fire({
                    title: 'Ingin Menghapus Data?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, hapus data!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(target).submit();
                    }
                })
            })
        })
    </script>
@endpush
