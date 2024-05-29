{{--
*Nagitaion sidebar

Use Sidebar
@include('livewire.dashboard.component.nav')
--}}

{{--Sidebar--}}
<div id="layoutSidenav">
<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ url("admin/") }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Presensi</div>
                {{--Siswa--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#siswa" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="ti ti-school"></i></div>
                    Siswa
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="siswa" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url("admin/daftar_siswa") }}">Daftar Siswa</a>
                        <a class="nav-link" href="cards.html">Rekap Presesnsi</a>
                    </nav>
                </div>
                {{--End Siswa--}}

                {{--Guru--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#guru" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="ti ti-school"></i></div>
                    Guru
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="guru" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/admin/data_guru')}}">Daftar Guru</a>
{{--                        <a class="nav-link" >Presensi</a>--}}
                        <a class="nav-link" href="{{url('/admin/rekap_guru')}}">Rekap Presensi</a>
                    </nav>
                </div>
                {{--End Guru--}}

                {{--Pegawai--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pegawai" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="ti ti-school"></i></div>
                    Pegawai
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="pegawai" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{url('/admin/daftar_pegawai')}}">Daftar Pegawai</a>
                        <a class="nav-link" href="cards.html">Rekap Presensi</a>
                    </nav>
                </div>
                {{--End Pegawai--}}

                <div class="sb-sidenav-menu-heading">Lain-lain</div>
                {{--Jadwal--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#jadwal" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="ti ti-school"></i></div>
                    Mata Pelajaran
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="jadwal" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url("admin/mapel") }}">Daftar Mapel</a>
                        <a class="nav-link" href="{{ url("admin/jadwal") }}">Jadwal</a>
                    </nav>
                </div>
                {{--End Jadwal--}}

                {{--Kelas--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#kelas" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="ti ti-school"></i></div>
                    Kelas
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="kelas" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ url("admin/kelas") }}">Daftar Kelas</a>
                    </nav>
                </div>
                {{--End Kelas--}}
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{\Illuminate\Support\Facades\Auth::user()->name}}
        </div>
    </nav>
</div>

{{--End Sidebar--}}
