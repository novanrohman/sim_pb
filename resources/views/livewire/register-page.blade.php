<div>
    @slot('title')
        Register - Sistem Presensi
    @endslot

    <div class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <h1 class="text-white text-center">Register</h1>
                        <p class="text-white text-center">Pilih jenis akun yang akan anda buat sesuai dengan jabatan anda</p>
                        <div class="col-lg-11 position-absolute top-50 start-50 translate-middle">
                                <div class="row justify-content-center">
                                <div class="col-lg-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <a href="{{ url('/register_siswa') }}"><i class="bi bi-backpack" style="font-size: 10rem;""></i></a>
                                            </div>
                                            <h5 class="card-title text-center"><a href="{{ url('/register_siswa') }}" style="text-decoration: none">Register Siswa</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <a href="{{ url('/register_guru') }}"><i class="bi bi-person-workspace" style="font-size: 10rem;"></i></i></a>
                                            </div>
                                            <h5 class="card-title text-center"><a href="{{ url('/register_guru') }}" style="text-decoration: none">Register Guru</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <a href="{{ url('/register_pegawai') }}"><i class="bi bi-person-badge" style="font-size: 10rem;"></i></a>
                                            </div>
                                            <h5 class="card-title text-center"><a href="{{ url('/register_pegawai') }}" style="text-decoration: none">Register Pegawai</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body">
                                            <div class="text-center">
                                                <a href="{{ url('/register_kepsek') }}"><i class="bi bi-building" style="font-size: 10rem;"></i></a>
                                            </div>
                                            <h5 class="card-title text-center"><a href="{{ url('/register_kepsek') }}" style="text-decoration: none">Register Kepala Sekolah</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
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
        </div>
    </div>
