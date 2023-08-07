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
            <form action="{{ route('data_surat.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="input_id_jenis_surat">Jenis Surat</label>
                    <select class="form-control" id="input_id_jenis_surat" name="id_jenis_surat" readonly>
                        <option value="{{ $jenisSurat->id_jenis_surat}}">{{ $jenisSurat->nama_jenis}}</option>
                    </select>
                </div>

                @if($dataPenduduk)
                <div class="form-group">
                    <label for="input_data_penduduk">Pilih Penduduk</label>
                    <select class="form-control select2" id="input_data_penduduk">
                        <option value="">--------</option>
                        @foreach($dataPenduduk->toArray() as $key => $value)
                        <option value="{{ $value['nik']}}" @php foreach($value as $kv=> $val){ echo 'data-'.$kv.'="'.$val.'"'; } @endphp>{{ $value['nama']}}</option>
                        @endforeach
                    </select>
                </div>
                @endIf

                @foreach($kolomSurat as $key=> $value)
                <div class="form-group">
                    <label for="input_tgl_pulang">{{$value->judul_kolom}}</label>
                    <input type="text" class="form-control" id="input_{{$value->nama_kolom}}" placeholder="Masukan {{$value->judul_kolom}}" name="data_kolom[{{$value->id_kolom_surat}}]" value="{{ old($value->nama_kolom)}}">
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
        <?php if ($dataPenduduk) { ?>
            $('#input_data_penduduk').change(function() {
                $.ajax({
                    url: "<?= route('penduduk.show', '') ?>/" + $(this).val(),
                    success: function(result) {
                        $.each(result, function(index) {
                            //alert(result[index]);
                            $('#input_'+index).val(result[index])
                        });
                    }
                });
            });
        <?php } ?>
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "yyyy-mm-dd"
        });
        $('#collapse-surat').addClass('show')
        $('#nav-<?= $key ?>').addClass('active')
    })
</script>
@endpush

@endsection