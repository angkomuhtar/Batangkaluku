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
            Gallery {{ucwords($type)}}
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Daftar {{ucwords($type)}}
            </h5>
            <div class="form-desc">
                &nbsp;
                <div class="pull-right">
                    <a href="{{route('dashboard.gallery.add',$type)}}" class="btn btn-primary"><i
                            class="fa fa-plus-circle"></i> Tambah {{ucwords($type)}}</a>
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
                        <th>Waktu Upload</th>
                        <th>Nama</th>
                        <th>{{ucwords($type)}}</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Waktu Upload</th>
                        <th>Nama</th>
                        <th>{{ucwords($type)}}</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($data AS $row)
                        <tr>
                            <td>
                                {{$row->created_at}}
                            </td>
                            <td>
                                <b>Bahasa Indonesia : </b><br>
                                {!! $row->title ?? '-' !!}
                                <br>
                                <b>Bahasa Inggris : </b><br>
                                {!! $row->title_en ?? '-' !!}
                            </td>
                            <td>
                                @if ($type === 'foto')
                                    <img src="{{asset('storage/'.$row->content)}}" alt="{{$row->title}}"
                                         style="max-width: 300px">
                                @elseif ($type === 'video')
                                    <video src="{{asset('storage/'.$row->content)}}" alt="{{$row->title}}" style="max-width: 300px" controls></video>
                                @endif
                            </td>
                            <td>{{$row->is_active ? 'Aktif' : 'Tidak Aktif'}}</td>
                            <td>
                            <td>
                                <a href="{{route('dashboard.gallery.edit',['type' => $type,'id' => $row->id])}}"
                                   class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
                                <a href="#" target="#delete-{{$row->id}}" class="btn btn-danger btn-delete"><i
                                        class="fa fa-trash"></i> Delete</a>
                                <form id="delete-{{$row->id}}"
                                      action="{{route('dashboard.gallery.edit',['type' => $type,'id' => $row->id])}}"
                                      method="post">
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
