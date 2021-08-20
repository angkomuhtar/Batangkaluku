@extends('admin.app')
@section('meta-title',$title ?? 'BBPP Batangkaluku')
{{--@section('meta-keywords','');--}}
{{--@section('meta-author','');--}}
{{--@section('meta-description','');--}}
@push('addon-style')
@endpush
@section('content')
    <div class="element-wrapper">
        <h6 class="element-header">
            User
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Daftar User
            </h5>
            <div class="form-desc">
                &nbsp;
                <div class="pull-right">
                    <a href="{{route('dashboard.user.add')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah User</a>
                </div>
            </div>
            @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button>{!!session('error')!!}
            </div>
            @endif
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> &times;</span></button>{{session('success')}}
            </div>
            @endif
            <div class="table-responsive">
                <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                    <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data AS $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>
                                    <a href="{{route('dashboard.user.edit',$item)}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="#" target="#delete-{{$item->id}}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i> Delete</a>
                                    <form id="delete-{{$item->id}}" action="{{route('dashboard.user.edit',$item)}}" method="post">
                                        @method('delete')
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('addon-script')
    <script>
        $('document').ready(function (){
            $('.btn-delete').click(function (e){
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
