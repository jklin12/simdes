<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">


    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item" id="nav-home">
        <a class="nav-link" href="{{ route('home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item" id="nav-surat-masuk">
        <a class="nav-link" href="{{ route('surat_masuk.index')}}">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Surat Masuk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-surat" aria-expanded="true" aria-controls="collapse-surat">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Surat Keluar</span>
        </a>
        <div id="collapse-surat" class="collapse" aria-labelledby="headingsurat" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" id="nav-" href="{{ route('data_surat.index','jenis=2')}}">Keterangan Belum Menikah</a>
                <a class="collapse-item" id="nav-" href="{{ route('data_surat.index','jenis=4')}}">Keterangan Tidak Mampu</a>
                <a class="collapse-item" id="nav-" href="{{ route('data_surat.index','jenis=5')}}">Usaha</a>
                <a class="collapse-item" id="nav-" href="{{ route('data_surat.index','jenis=6')}}">Beda Identitas</a>
                <a class="collapse-item" id="nav-" href="{{ route('data_surat.index','jenis=7')}}">Keterangan Kematian</a>
            </div>
        </div>
    </li>
    <li class="nav-item" id="nav-penduduk">
        <a class="nav-link" href="{{ route('penduduk.index')}}">
            <i class="fas fa-fw fa-users"></i>
            <span>Data Penduduk</span></a>
    </li>
    @if(auth()->user()->level == 9)

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-setting" aria-expanded="true" aria-controls="collapse-setting">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="collapse-setting" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" id="nav-ref_jenis_surat" href="{{ route('ref_jenis_surat.index')}}">Jenis Surat</a>
                <a class="collapse-item" id="nav-ref_kolom_surat" href="{{ route('ref_kolom_surat.index')}}">Kolom Surat</a>
            </div>
        </div>
    </li>
    @endif


</ul>
<!-- End of Sidebar -->