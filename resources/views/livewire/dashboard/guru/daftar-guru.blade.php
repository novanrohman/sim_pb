<div>
    @slot('title')
        Guru - Sistem Presensi
    @endslot

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @include('livewire.dashboard.component.nav')

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    @include('livewire.dashboard.component.topbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
                        <div class="row">
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    {{-- <label for="exampleFormControlSelect1">Jurusan</label> --}}
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
                            <div class="col-md-2">
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Cari</a>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>NIP</th>
                                                <th>Telp</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Aksi</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($gurus as $guru)
                                            <tr>
                                                <td>{{$guru->nama_guru}}</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>
                                                    <button class="btn btn-primary" type="button">Detail</button>
                                                    <button class="btn btn-danger" type="button">Hapus</button>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
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
</div>
