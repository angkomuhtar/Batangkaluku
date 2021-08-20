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
            <form id="formValidate">
                <h5 class="form-header">
                    Form Validation
                </h5>
                <div class="form-desc">
                    Validation of the form is made possible using powerful validator plugin for
                    bootstrap. <a
                        href="http://1000hz.github.io/bootstrap-validator/" target="_blank">Learn
                        more about Bootstrap
                        Validator</a>
                </div>
                <div class="form-group">
                    <label for=""> Email address</label><input class="form-control"
                                                               data-error="Your email address is invalid"
                                                               placeholder="Enter email"
                                                               required="required"
                                                               type="email"/>
                    <div class="help-block form-text with-errors form-control-feedback"></div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for=""> Password</label><input class="form-control"
                                                                  data-minlength="6"
                                                                  placeholder="Password"
                                                                  required="required"
                                                                  type="password"/>
                            <div class="help-block form-text text-muted form-control-feedback">
                                Minimum of 6 characters
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Confirm Password</label><input class="form-control"
                                                                         data-match-error="Passwords don&#39;t match"
                                                                         placeholder="Confirm Password"
                                                                         required="required"
                                                                         type="password"/>
                            <div class="help-block form-text with-errors form-control-feedback"></div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input class="form-control" id="imgInp" type="file" accept="image/*" data-error="image is required" required>
                    <div id="img-preview-container" class="pt21">
                        <img class="border img-thumbnail" src="{{asset('assets/img/onboarding1.jpg')}}" alt="" id="imgPvw" style="max-height: 500px">
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Regular select</label><select class="form-control">
                        <option value="New York">
                            New York
                        </option>
                        <option value="California">
                            California
                        </option>
                        <option value="Boston">
                            Boston
                        </option>
                        <option value="Texas">
                            Texas
                        </option>
                        <option value="Colorado">
                            Colorado
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Radio Buttons</label>
                    <div class="form-check">
                        <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1" />Option number one</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2" />Here is another radio option</label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3" />Option three is here</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""> Multiselect</label><select class="form-control select2"
                                                              multiple="true">
                        <option selected="true">
                            New York
                        </option>
                        <option selected="true">
                            California
                        </option>
                        <option>
                            Boston
                        </option>
                        <option>
                            Texas
                        </option>
                        <option>
                            Colorado
                        </option>
                    </select>
                </div>
                <fieldset class="form-group">
                    <legend><span>Section Example</span></legend>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> First Name</label><input class="form-control"
                                                                        data-error="Please input your First Name"
                                                                        placeholder="First Name"
                                                                        required="required"
                                                                        type="text"/>
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Last Name</label><input class="form-control"
                                                                      data-error="Please input your Last Name"
                                                                      placeholder="Last Name"
                                                                      required="required"
                                                                      type="text"/>
                                <div class="help-block form-text with-errors form-control-feedback"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for=""> Date of Birth</label><input
                                    class="single-daterange form-control"
                                    placeholder="Date of birth" type="text"
                                    value="04/12/1978"/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="">Twitter Username</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            @
                                        </div>
                                    </div>
                                    <input class="form-control" placeholder="Twitter Username"
                                           type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Date Range Picker</label><input
                            class="multi-daterange form-control" type="text"
                            value="03/31/2017 - 04/06/2017"/>
                    </div>
                    <div class="form-group">
                        <label> Example textarea</label><textarea class="form-control"
                                                                  rows="3"></textarea>
                    </div>
                </fieldset>
                <div class="form-check">
                    <label class="form-check-label"><input class="form-check-input"
                                                           type="checkbox"/>I agree to terms and
                        conditions</label>
                </div>
                <div class="form-buttons-w">
                    <button class="btn btn-primary" type="submit"> Submit</button>
                    <a href="#" class="btn btn-success" id="alert-success">Success</a>
                    <a href="#" class="btn btn-warning" id="alert-confirm">Confirm</a>
                    <a href="#" class="btn btn-danger" id="alert-error">Error</a>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        $('#alert-success').click(function (e){
            e.preventDefault();
            Swal.fire('Any fool can use a computer');
        })
        $('#alert-confirm').click(function (e){
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })
        })
        $('#alert-error').click(function (e){
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href="#">Why do I have this issue?</a>'
            })
        })
        imgInp.onchange = e => {
            const [file] = imgInp.files;
            if (file){
                imgPvw.src = URL.createObjectURL(file);
            }
        }
    </script>
@endpush
