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
            Artikel {{ucwords($type)}}
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Daftar Artikel {{ucwords($type)}}
            </h5>
            <div class="form-desc">
                &nbsp;
                <div class="pull-right">
                    <a href="{{route('dashboard.artikel.add',$type)}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Artikel {{ucwords($type)}}</a>
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
                        <th>Waktu Publish</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Penulis</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Waktu Publish</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Penulis</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data AS $row)
                        <tr>
                            <td>
                                {{$row->published_time}}
                            </td>
                            <td>
                                <img src="{{asset('storage/'.$row->image)}}" alt="{{$row->image}}" style="max-width: 300px">
                            </td>
                            <td>
                                <b>Bahasa Indonesia : </b><br>
                                {!! $row->title ?? '-' !!}
                                <br>
                                <b>Bahasa Inggris : </b><br>
                                {!! $row->title_en ?? '-' !!}
                            </td>
                            <td>
                                <b>Bahasa Indonesia : </b><br>
                                {!! $row->description ?? '-' !!}
                                <br>
                                <b>Bahasa Inggris : </b><br>
                                {!! $row->description_en ?? '-' !!}
                            </td>
                            <td>
                                {{$row->creator}}
                            </td>
                            <td>{{$row->is_active ? 'Aktif' : 'Tidak Aktif'}}</td>
                            <td>
                            <td>
                                <a href="{{route('dashboard.artikel.edit',['type' => $type,'id' => $row->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#" target="#delete-{{$row->id}}" class="btn btn-danger btn-delete"><i class="fa fa-trash"></i> Delete</a>
                                <form id="delete-{{$row->id}}" action="{{route('dashboard.artikel.edit',['type' => $type,'id' => $row->id])}}" method="post">
                                    @method('delete')
                                </form>
                            </td>
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
