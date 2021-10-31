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
                <input type="hidden" name="is_image" value="1">
                <h5 class="form-header">
                    {{$data->name_str}}
                </h5>
                <div class="form-desc">

                </div>
                <div class="row">
                    <div class="col-12 border-right">
                        <div class="form-group">
                            <label for="">Gambar *</label>
                            <input name="content" class="form-control" id="imgInp" type="file" accept="image/*" data-error="image is required"
                                {{$data->id ? '' : 'required'}}>
                            <div class="help-block form-text with-errors form-control-feedback">

                            </div>
                            <div id="img-preview-container" class="pt21">
                                <img class="border img-thumbnail" src="{{!$data->id ? asset('assets/img/onboarding1.jpg') : asset('storage/'.$data->content)}}" alt=""
                                     id="imgPvw" style="max-height: 500px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit"> Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        // CKEDITOR.replace('content');
        // CKEDITOR.replace('content_en');
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
                        // formData.set('content', CKEDITOR.instances.content.getData())
                        // formData.set('content_en', CKEDITOR.instances.content_en.getData())
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
        imgInp.onchange = e => {
            const [file] = imgInp.files;
            if (file) {
                imgPvw.src = URL.createObjectURL(file);
            }
        }
    </script>
@endpush
