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
            <form id="formValidate" action="{{$action}}" method="post">
                @method($method)
                <h5 class="form-header">
                    User
                </h5>
                <div class="form-desc">

                </div>
                <div class="form-group">
                    <label for=""> Nama</label>
                    <input class="form-control"
                           name="name"
                           data-error="name is required"
                           placeholder="Enter Name"
                           required="required"
                           value="{{$data->name ?? old('name')}}"
                           type="text"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Email</label>
                    <input class="form-control"
                           name="email"
                           data-error="email is required"
                           placeholder="Enter Email"
                           required="required"
                           value="{{$data->email ?? old('email')}}"
                           type="email"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Password</label>
                    <input class="form-control"
                           name="password"
                           data-error="password is required"
                           placeholder="Enter Password"
                           value=""
                           type="password"/>
                    <div class="help-block form-text with-errors form-control-feedback">

                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Konfirmasi Password</label>
                    <input class="form-control"
                           name="password_confirmation"
                           data-error="password confirmation is required"
                           placeholder="Enter Password Confirmation"
                           value=""
                           type="password"/>
                    <div class="help-block form-text with-errors form-control-feedback">

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
                        $('.has-error.has-danger').removeClass('has-error has-danger');
                        $('.form-control-feedback').html('');
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
