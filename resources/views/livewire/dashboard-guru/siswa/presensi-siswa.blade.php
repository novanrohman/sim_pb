<div>
    @slot('title')
        {{ $title }}
    @endslot

    @include('livewire.dashboard-guru.component.topbar');
    @include('livewire.dashboard-guru.component.nav');
    {{-- Presensi siswa --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Presensi Siswa</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="form-group">
                          <label for="">Jurusan</label>
                          <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Presensi {{ date('Y/m/d') }}
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <p>{{ dd($siswa as $siswa->nama) }}</p> --}}
                                    @forelse ($siswas as $siswa => $value)
                                <tr>
                                    <td>{{ $siswa + 1 + ($siswas->currentPage() - 1) * $siswas->perPage() }}</td>
                                    <td>{{ $value->nama_siswa }}</td>
                                    <td>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option selected disabled class="font-weight-bold">Status</option>
                                            <option value="Hadir">Hadir</option>
                                            <option value="Izin">Izin</option>
                                            <option value="Sakit">Sakit</option>
                                            <option value="Alpha">Alpha</option>
                                        </select>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="3" class="text-center">Data tidak ditemukan</td>
                                @endforelse

                            </tbody>
                            {{-- <p class="text-center">Data Tidak Ditemukan</p> --}}
                        </table>
                        <button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Simpan</button>
                    </div>
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
    {{-- @include('livewire.dashboard-guru.component.footer'); --}}
</div>

{{-- <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('livewire.dashboard-guru.component.nav')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    @include('livewire.dashboard-guru.component.topbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Presensi Siswa</h1>
                        <p>{{ date('Y/m/d H:i') }}</p>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Jurusan</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled class="font-weight-bold">Jurusan</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelas</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled class="font-weight-bold"> Kelas</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Kelas</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled class="font-weight-bold"> Tahun Ajar</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Pilih</a>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <h6 class="m-0 font-weight-bold text-primary">Jurusan... Kelas... 20../20..</h6>
                                    <div class="ml-auto">

                                        <a name="" id="" class="btn btn-primary" href="#" role="button">Kirim</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Nama</th>
                                                <th>NIS</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <p class="text-center">Data Tidak Ditemukan</p>
                                        <tbody>
                                            <hr>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon</td>
                                                <td>Edinburgh</td>
                                                <td><select class="form-control" id="exampleFormControlSelect1">
                                                    <option selected disabled class="font-weight-bold">Status</option>
                                                    <option>Hadir</option>
                                                    <option>Izin</option>
                                                    <option>Sakit</option>
                                                    <option>Alpha</option>
                                                </select></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.container-fluid -->

                    @include('livewire.dashboard.component.footer')
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
</div> --}}
