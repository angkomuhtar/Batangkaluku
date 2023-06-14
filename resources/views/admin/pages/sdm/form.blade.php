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
                    Form Sumber Daya Manusia
                </h5>
                <div class="form-desc">

                </div>
                <div class="form-group">
                    <label for="">Nama *</label>
                    <input value="{{$data->name ?? old('name')}}" name="name" class="form-control" type="text"
                           data-error="nama is required" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">NIP *</label>
                    <input value="{{$data->nip ?? old('nip')}}" name="nip" class="form-control" type="text"
                           data-error="nip is required" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Bagian / Bidang *</label>
                    <select name="department_id" class="form-control"
                            data-error="bagian / bidang is required"
                            required>
                        <option value="">-- Pilih Bagian / Bidang --</option>
                        @foreach ($department AS $row)
                            <option
                                value="{{$row->id}}" {{$data->department_id === $row->id ? 'selected' : ''}}>{{$row->department}}</option>
                        @endforeach
                    </select>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Foto *</label>
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
                                        <label for=""> Jabatan *</label>
                                        <input class="form-control"
                                               name="position"
                                               value="{{$data->position ?? old('position')}}"
                                               data-error="jabatan is required"
                                               placeholder="Enter Jabatan"
                                               required
                                               type="text"/>
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
                                        <label for=""> Jabatan</label>
                                        <input class="form-control"
                                               name="position_en"
                                               value="{{$data->position_en ?? old('position_en')}}"
                                               data-error="jabatan is required"
                                               placeholder="Enter Jabatan"
                                               type="text"/>
                                        <div class="help-block form-text with-errors form-control-feedback"></div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Tingkatan *</label>
                    <select data-error="tingkatan is required" name="level_id" class="form-control" required>
                        <option value="">-- Pilih Tingkatan --</option>
                        <option value="1" {{$data->level_id == 1 ? 'selected' : ''}}>Kepala</option>
                        <option value="2" {{$data->level_id == 2 ? 'selected' : ''}}>Sekertaris </option>
                        <option value="3" {{$data->level_id == 3 ? 'selected' : ''}}>Anggota </option>
                    </select>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Jenis Kelamin *</label>
                    <select data-error="jenis kelamin is required" name="gender" class="form-control" required>
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="m" {{$data->gender == 'm' ? 'selected' : ''}}>Laki-laki</option>
                        <option value="f" {{$data->gender == 'f' ? 'selected' : ''}}>Perempuan</option>
                    </select>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Agama *</label>
                    <select data-error="Agama is required" name="religion" class="form-control" required>
                        <option value="">-- Pilih Agama --</option>
                        <option value="Islam" {{$data->religion == 'Islam' ? 'selected' : ''}}>Islam</option>
                        <option value="Kristen" {{$data->religion == 'Kristen' ? 'selected' : ''}}>Kristen</option>
                        <option value="Protestan" {{$data->religion == 'Protestan' ? 'selected' : ''}}>Protestan</option>
                        <option value="Hindu" {{$data->religion == 'Hindu' ? 'selected' : ''}}>Hindu</option>
                        <option value="Budha" {{$data->religion == 'Budha' ? 'selected' : ''}}>Budha</option>
                        <option value="Konghucu" {{$data->religion == 'Konghucu' ? 'selected' : ''}}>Konghucu</option>
                        <option value="Lain-lain" {{$data->religion == 'Lain-lain' ? 'selected' : ''}}>Lainnya</option>
                    </select>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Pendidikan Terakhir *</label>
                    <select data-error="Pendidikan Terakhir is required" name="last_edu" class="form-control" required>
                        <option value="">-- Pilih Pendidikan Terakhir --</option>
                        <option value="S3" {{$data->last_edu == 'S3' ? 'selected' : ''}}>S3</option>
                        <option value="S2" {{$data->last_edu == 'S2' ? 'selected' : ''}}>S2</option>
                        <option value="S1" {{$data->last_edu == 'S1' ? 'selected' : ''}}>S1</option>
                        <option value="D3" {{$data->last_edu == 'D3' ? 'selected' : ''}}>D3</option>
                        <option value="SMA" {{$data->last_edu == 'SMA' ? 'selected' : ''}}>SMA</option>
                        <option value="SMP" {{$data->last_edu == 'SMP' ? 'selected' : ''}}>SMP</option>
                        <option value="SD" {{$data->last_edu == 'SD' ? 'selected' : ''}}>SD</option>
                        <option value="Lain-lain" {{$data->last_edu == 'lain-lain' ? 'selected' : ''}}>Lainnya</option>
                    </select>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Universitas / Perguruan Tinggi *</label>
                    <input type="text" value="{{$data->univ}}" placeholder="Universitas / Perguruan Tinggi" data-error="Universitas / Perguruan Tinggi is required" name="univ" class="form-control" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Fakultas / Jurusan *</label>
                    <input type="text" value="{{$data->major}}" placeholder="Fakultas / Jurusan" data-error="Fakultas / Jurusan is required" name="major" class="form-control" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Pangkat / Golongan *</label>
                    <input type="text" value="{{$data->rank}}" placeholder="Pangkat / Golongan" data-error="Pangkat / Golongan is required" name="rank" class="form-control" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Jabatan *</label>
                    <input type="text" value="{{$data->department}}" placeholder="Jabatan" data-error="Jabatan is required" name="department" class="form-control" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Email *</label>
                    <input type="email" value="{{$data->email}}" placeholder="Email" data-error="Email is required" name="email" class="form-control" required/>
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Penghargaan </label>
                    @for ($i = 0; $i < 6; $i++)
                    <input type="text" value="{{isset(optional($data)->awards[$i]) ? $data->awards[$i]->award : ''}}" placeholder="Penghargaan {{$i+1}}" name="award[]" class="form-control"/>
                    @endfor
                    <div class="help-block form-text with-errors form-control-feedback">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Urutan </label>
                    <input class="form-control"
                           name="order_id"
                           data-error="urutan is required"
                           placeholder="Urutan"
                           value="{{$data->order_id ?? old('order_id')}}"
                           type="number"/>
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
                    <button class="btn btn-primary" type="submit"> Submit</button>
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
        imgInp.onchange = e => {
            const [file] = imgInp.files;
            if (file) {
                imgPvw.src = URL.createObjectURL(file);
            }
        }
    </script>
@endpush
