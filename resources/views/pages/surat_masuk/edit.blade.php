@extends('layouts.default')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">\
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah {{ $title }}</h1>

    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="card mb-4">
        <div class="card-body">
            <form action="{{ route('surat_masuk.update',$suratMasuk->id_surat)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @foreach($suratMasuk->field as $key=> $value)
                <div class="form-group">
                    <label for="input_tgl_pulang">{{$value['label']}}</label>
                    @if($value['form_type'] == 'text')
                    <input type="text" class="form-control" id="input_{{$key}}" placeholder="Masukan {{$value['label']}}" name="{{$key}}" value="{{ $suratMasuk->$key}}">
                    @elseif($value['form_type'] == 'select')
                    <select class="form-control" id="input_{{$key}}" name="{{$key}}">
                        <option value="">-- Pilih {{$value['label']}} --</option>
                        @foreach($value['keyvaldata'] as $kdata => $vdata)
                        <option value="{{$kdata}}" >{{$vdata}}</option>
                        @endforeach
                    </select>
                    @elseif($value['form_type'] == 'date')
                    <div class="datepicker date input-group">
                        <input type="text" class=" form-control" id="input_{{$key}}" placeholder="Masukan {{$value['label']}}" name="{{$key}}" value="{{ $suratMasuk->$key}}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    @elseif($value['form_type'] == 'file')
                    <div class=" input-group">
                        <input type="file" class="form-control" id="input_{{$key}}" placeholder="Masukan {{$value['label']}}" name="{{$key}}" value="{{ old($key)}}">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-file"></i></span>
                        </div>
                    </div>
                    @endif
                </div>
                @endforeach

                <div class="d-sm-flex justify-content-center mb-2">
                    <button class="btn btn-primary btn-icon-split " type="submit">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i></span><span class="text">Simpan
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>


@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();

        $('#input_jenis_surat').val("<?= $suratMasuk->jenis_surat ?>").change()
        
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "yyyy-mm-dd"
        });
        $('#nav-<?= $key ?>').addClass('active')
    })
</script>
@endpush

@endsection