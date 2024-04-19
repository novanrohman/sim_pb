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
                        <h1 class="h3 mb-2 text-gray-800">Rekap Guru</h1>
                        <p>{{ date('M Y') }}</p>
                        <div class="row">
                            {{-- Month --}}

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker11" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker11"/>
                                        <div class="input-group-append" data-target="#datetimepicker11" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker11').datetimepicker({
                                        viewMode: 'years',
                                        format: 'MM/YYYY'
                                    });
                                });
                            </script>

                            <div class="col-md-2 col-sm-12">
                                <div class="form-group">
                                    {{-- <label for="exampleFormControlSelect1">Kelas</label> --}}
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected disabled class="font-weight-bold">Bulan</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            {{-- End Month --}}
                            <div class="col-md-2">
                                <a name="" id="" class="btn btn-primary" href="#"
                                    role="button">Pilih</a>
                            </div>
                        </div>

                        <!-- DataTales Example -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <div class="row">
                                    <h6 class="m-0 font-weight-bold text-primary">Rekap Guru</h6>
                                    <div class="ml-auto">

                                        <a name="" id="" class="btn btn-primary" href="#"
                                            role="button"><i
                                            class="fas fa-download fa-sm text-white-50"></i> Download</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th rowspan="2" class="align-middle">No</thc>
                                                <th rowspan="2" class="align-middle">Nama</th>
                                                <th rowspan="2" class="align-middle">NIP</th>
                                                <th colspan="4">Status</th>
                                            </tr>
                                            <tr class="text-center">
                                                <th>Hadir</thc>
                                                <th>Alpha</th>
                                                <th>Izin</th>
                                                <th>Sakit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01</td>
                                                <td>Tiger Nixon Albara Name Sata</td>
                                                <td>1231231312</td>
                                                <td>18</td>
                                                <td>1</td>
                                                <td>0</td>
                                                <td>2</td>
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
