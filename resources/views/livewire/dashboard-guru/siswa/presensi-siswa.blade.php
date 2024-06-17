<div>
    @slot('title')
        {{ $title }}
    @endslot

    @include('livewire.dashboard-guru.component.topbar')
    @include('livewire.dashboard-guru.component.nav')

    {{-- Presensi siswa --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Presensi Siswa</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        {{-- Filter --}}
                        @livewire('dashboard-guru.siswa.filter')
                        {{-- <input type="text" name="" id="" value="{{ $selected }}"> --}}
                    </div>
                </div>  

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Presensi {{ date('Y/m/d') }}
                    </div>
                    
                        {{-- Show List siswa --}}
                        @livewire('dashboard-guru.siswa.show-siswa')
                            
                    
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    {{-- End Presensi siswa --}}
</div>
