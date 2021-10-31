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
                    Pelatihan
                </h5>
                <div class="form-desc">

                </div>
                <div class="form-group">
                    <label for="">Gambar *</label>
                    <input name="image" class="form-control" id="imgInp" type="file" accept="image/*"
                           data-error="image is required"
                        {{$data->id ? '' : 'required'}}>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                    <div id="img-preview-container" class="pt21">
                        <img class="border img-thumbnail"
                             src="{{!$data->id ? asset('assets/img/onboarding1.jpg') : asset('storage/'.$data->image)}}"
                             alt=""
                             id="imgPvw" style="max-height: 500px">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 border-right">
                        <fieldset class="form-group">
                            <legend><span>Konten Bahasa Indonesia</span></legend>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for=""> Pelatihan *</label>
                                        <input name="title" type="text" class="form-control"
                                               data-error="nama pelatihan is required"
                                               value="{{$data->title ?? old('title')}}"
                                               placeholder="Pelatihan"
                                               required>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Deskripsi</label>
                                        <textarea id="description" name="description"
                                                  class="form-control">{{$data->description ?? old('description')}}</textarea>
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
                                        <label for=""> Pelatihan </label>
                                        <input name="title_en" type="text" class="form-control"
                                               data-error="nama pelatihan is required"
                                               placeholder="Pelatihan"
                                               value="{{$data->title_en ?? old('title_en')}}"
                                        >
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Deskripsi</label>
                                        <textarea id="description_en" name="description_en"
                                                  class="form-control">{{$data->description_en ?? old('description_en')}}</textarea>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Tanggal Pelatihan *</label>
                    <input class="form-control"
                           name="date"
                           data-error="tanggal pelatihan is required"
                           placeholder="Tanggal Pelatihan"
                           required="required"
                           value="{{$data->date ? $data->date : old('date') ?? date('Y-m-d')}}"
                           type="date"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Waktu Mulai Pelatihan *</label>
                    <input class="form-control"
                           name="time_start"
                           data-error="waktu mulai is required"
                           placeholder="Waktu Mulai Pelatihan"
                           required="required"
                           value="{{$data->time_start}}"
                           type="time"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Waktu Selesai Pelatihan </label>
                    <input class="form-control"
                           name="time_end"
                           data-error="waktu mulai is required"
                           placeholder="Waktu Selesai Pelatihan"
                           value="{{$data->time_end}}"
                           type="time"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Lokasi *</label>
                    <textarea class="form-control"
                              name="location"
                              data-error="lokasi is required"
                              required>{{$data->location ?? old('location')}}</textarea>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Lampiran </label>
                    <input type="file" name="attachment" class="form-control"
                           data-error="Lampiran is required"
                           placeholder="Lampiran">
                    @if ($data->attachment)
                    <a href="{{asset('storage/'.$data->attachment)}}" target="_blank">Lampiran</a>
                    @endif
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
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
        CKEDITOR.replace('description');
        CKEDITOR.replace('description_en');
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
                        formData.set('description', CKEDITOR.instances.description.getData())
                        formData.set('description_en', CKEDITOR.instances.description_en.getData())
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

        imgInp.onchange = e => {
            const [file] = imgInp.files;
            if (file) {
                imgPvw.src = URL.createObjectURL(file);
            }
        }
    </script>
@endpush
