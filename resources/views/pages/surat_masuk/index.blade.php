@extends('layouts.default')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>

    </div>
    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @endif
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(auth()->user()->level == 9)

    <a href="{{ route('surat_masuk.create')}}" class="btn btn-primary btn-icon-split mb-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
        </span>
        <span class="text">Tambah {{ $title }}</span>
    </a>
    @endif
    <div class="card mb-4">
        <div class="card-body">
            <table class="table table-stipped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Surat</th>
                        <th>Kategori Surat</th>
                        <th>Tanggal</th>
                        <th>Asal Surat</th>
                        <th>Tujuan Surat</th>
                        <th>Judul Surat</th>
                        <th>Status</th>
                        <th>File Surat Masuk</th>
                        <th>File Surat Balasan</th>
                        <th colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($surats as $key => $surat )
                    <tr>
                        <td>{{ ($surats->currentpage()-1) * $surats->perpage() + $loop->index + 1 }}</td>
                        <td>{{ $surat->nomor_surat}}</td>
                        <td>{{ $surat->jenis_surat}}</td>
                        <td>{{ $surat->tgl_surat}}</td>
                        <td>{{ $surat->dari_surat}}</td>
                        <td>{{ $surat->kepada_surat}}</td>
                        <td>{{ $surat->judul_surat}}</td>
                        <td>
                            @if($surat->status == 'Ditolak')
                            <a href="#" class="alasan-btn" data-toggle="modal" data-target="#alasan-modal" data-alasan="{{ $surat->alasan }}" >{{ $surat->status}}</a>
                            @else
                            {{ $surat->status}}
                            @endif

                        </td>
                        <td class="text-center"><a href="/simdes/public/{{ $surat->file_surat }}" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-download"></i></a></td>

                        <td class="text-center">
                            @if($surat->file_tanggapan)
                            <a href="/simdes/public/{{ $surat->file_tanggapan }}" class="btn btn-info btn-sm" target="_blank"><i class="fa fa-download"></i></a>
                            @endif
                        </td>
                        @if(auth()->user()->level == 9)
                        @if($surat->status == 'Tidak Ditanggapi')
                        <td class="text-center"><a href="{{ route('surat_masuk.edit',$surat->id_surat )}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a></td>
                        <td class="text-center"><a href="" class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#delete-modal" data-route="{{ route('surat_masuk.destroy',$surat->id_surat )}}" data-name="{{ $surat->judul_surat}}"><i class="fa fa-trash"></i></a></td>
                        @elseif($surat->status == 'Perlu Ditanggapi' || $surat->status == 'Ditolak')
                        <td>
                            <a href="#" class="btn btn-warning btn-icon-split tanggapan-btn" data-toggle="modal" data-target="#tanggapan-modal" data-route="{{ route('surat_masuk.tanggapan',$surat->id_surat )}}" data-name="{{ $surat->judul_surat}}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Tanggapi Surat</span>
                            </a>
                        </td>
                        @endif
                        @elseif(auth()->user()->level == 8)
                        <td class="text-center">
                            @if($surat->status == 'Tidak Ditanggapi')

                            <a href="#" class="btn btn-warning btn-icon-split tanggapi-btn" data-toggle="modal" data-target="#tanggapi-modal" data-route="{{ route('surat_masuk.tanggapi',$surat->id_surat )}}" data-name="{{ $surat->judul_surat}}">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Tanggapi Surat</span>
                            </a>
                            @elseif($surat->status == 'Riview Tanggapan')
                            <a href="#" class="btn btn-success btn-icon-split riview-btn" data-toggle="modal" data-target="#riview-modal" data-route="{{ route('surat_masuk.riview',$surat->id_surat )}}" data-name="{{ $surat->judul_surat}}" data-status="Ditanggapi">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text">Terima</span>
                            </a>
                            <a href="#" class="btn btn-danger btn-icon-split riview-btn" data-toggle="modal" data-target="#riview-modal" data-route="{{ route('surat_masuk.riview',$surat->id_surat )}}" data-name="{{ $surat->judul_surat}}" data-status="Ditolak">
                                <span class="icon text-white-50">
                                    <i class="fas fa-times"></i>
                                </span>
                                <span class="text">Tolak</span>
                            </a>
                            @endif
                        </td>

                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $surats->links()}}
    </div>

</div>


<div class="modal fade" id="alasan-modal" tabindex="-1" role="dialog" aria-labelledby="tanggapiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Alasan Ditolak</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="alasan-body"></div>
        
        </div>
    </div>
</div>
<div class="modal fade" id="tanggapan-modal" tabindex="-1" role="dialog" aria-labelledby="tanggapiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Tanggapan Surat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="" method="POST" id="tanggapan-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mx-4">
                    <label for="validationTooltip01">File Tanggapan</label>

                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_tanggapn" name="file_tanggapan">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" form="tanggapan-form" type="submit">Ya</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="riview-modal" tabindex="-1" role="dialog" aria-labelledby="tanggapiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Riview Surat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin <span id="riview-status"></span> <strong id="riview-name"></strong></div>
            <form action="" method="POST" id="riview-form">
                @csrf
                <input type="hidden" name="status" value="" id="update-riview-status">
                <div class="form-group mx-4" id="input-alasan-tolak">
                    <label for="exampleFormControlTextarea1">Alasan Ditolak : </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alasan" rows="3"></textarea>
                </div>
                @method('PUT')
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" form="riview-form" type="submit">Ya</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tanggapi-modal" tabindex="-1" role="dialog" aria-labelledby="tanggapiModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Tanggapi Surat</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin menanggapi <strong id="menanggapi-name"></strong></div>
            <form action="" method="POST" id="menanggapi-form">
                @csrf
                @method('PUT')
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-success" form="menanggapi-form" type="submit">Ya</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Apakah anda yakin menghapus <strong id="delete-name"></strong></div>
            <form action="" method="POST" id="delete-form">
                @csrf
                @method('DELETE')
            </form>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-danger" form="delete-form" type="submit">Ya</button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        $('#nav-surat-masuk').addClass('active')
        $('.delete-btn').click(function() {
            $('#delete-name').html($(this).data('name'))
            $('#delete-form').attr('action', $(this).data('route'))
        })
        $('.tanggapi-btn').click(function() {
            $('#menanggapi-name').html($(this).data('name'))
            $('#menanggapi-form').attr('action', $(this).data('route'))
        })
        $('.riview-btn').click(function() {
            if ($(this).data('status') == 'Ditolak') {
                $('#input-alasan-tolak').css('display','block')
            }else{
                $('#input-alasan-tolak').css('display','none')
            }
            $('#riview-name').html($(this).data('name'))
            $('#riview-status').html($(this).data('status'))
            $('#update-riview-status').val($(this).data('status'))
            $('#riview-form').attr('action', $(this).data('route'))
        })

        $('.tanggapan-btn').click(function() {
            $('#tanggapan-form').attr('action', $(this).data('route'))
        })
        $('.alasan-btn').click(function() {
            $('#alasan-body').html( $(this).data('alasan'))
        })
    })
</script>
@endpush

@endsection