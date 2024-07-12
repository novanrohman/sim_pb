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
                    <a class="nav-link" wire:navigate href="{{ url("admin/") }}">
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
                            <a class="nav-link" wire:navigate href="{{ url("guru/presensi_siswa") }}">Presensi</a>
                            <a class="nav-link" wire:navigate href="cards.html">Rekap Presesnsi</a>
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
                            <a class="nav-link" href="cards.html">Presensi</a>
                            <a class="nav-link" href="cards.html">Rekap Presensi</a>
                        </nav>
                    </div>
                    {{--End Guru--}}
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{-- {{\Illuminate\Support\Facades\Auth::Guru()->name}} --}}
                {{\Illuminate\Support\Facades\Auth::guard('guru')->user()->nama_guru}}
                @if(!empty(\Illuminate\Support\Facades\Auth::guard('guru')->user()->matapelajaran->mata_pelajaran))
                {{\Illuminate\Support\Facades\Auth::guard('guru')->user()->matapelajaran->mata_pelajaran}}
                    
                @endif
            </div>
        </nav>
    </div>

{{--End Sidebar--}}
