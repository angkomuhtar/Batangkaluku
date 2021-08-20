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
                    Lampiran {{$new_name}}
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
                                        <label for=""> Nama Lampiran *</label>
                                        <input name="name" type="text" class="form-control" data-error="judul halaman is required"
                                               value="{{$data->name ?? old('name')}}"
                                               required>
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
                                        <label for=""> Nama Lampiran</label>
                                        <input name="name_en" type="text" class="form-control" data-error="judul halaman is required"
                                               value="{{$data->name_en ?? old('name_en')}}"
                                               >
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Lampiran *</label>
                    <input class="form-control"
                           name="attachment"
                           data-error="lampiran is required"
                           placeholder="File Lampiran"
                           type="file"
                           {{$data->id ? '' : 'required'}}
                    />
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                    @if ($data->attachment)
                    <div class="pt-1">
                        <a href="{{asset('storage/'.$data->attachment)}}" target="_blank"><i class="fa fa-file"></i> {{$data->name}}</a>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Status *</label>
                    <div class="form-check">
                        <label class="form-check-label"><input
                                {{$data->id ? ($data->is_active ? 'checked' : '') : 'checked'}} class="form-check-input"
                                name="is_active"
                                type="radio" value="1" required/>Aktif</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input
                                {{$data->id ? (!$data->is_active ? 'checked' : '') : ''}} class="form-check-input"
                                name="is_active"
                                type="radio" value="0"/>Tidak Aktif</label>
                    </div>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit"> Simpan</button>
                    <a href="{{$redirect}}" class="btn btn-dark">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
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
                                    location.href = '{{$redirect}}'
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
    </script>
@endpush
