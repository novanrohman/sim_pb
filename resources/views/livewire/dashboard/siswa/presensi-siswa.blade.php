<div>
    @slot('title')
        Siswa - Sistem Presensi
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
                        <h1 class="h3 mb-2 text-gray-800">Presensi Siswa</h1>
                        <p>{{ date('Y/m/d H:i') }}</p>
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
                            <div class="col-md-5 col-sm-12">
                                <div class="form-group">
                                    {{-- <label for="exampleFormControlSelect1">Kelas</label> --}}
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
                            <div class="col-md-2">
                                <a name="" id="" class="btn btn-primary" href="#" role="button">Pilih</a>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <h6 class="m-0 font-weight-bold text-primary">Jurusan Kelas X</h6>
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
                                        <tbody>
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
</div>