<div>
    @slot('title')
    Siswa - Sistem Presensi
@endslot

        @include('livewire.dashboard.component.nav')
        @include('livewire.dashboard.component.topbar')

        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Detail</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Detail guru</li>
                </ol>
                <main>
                    <div class="row">
                        <div class="col-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="container-fluid">

                                        <div class="text-center">
                                            <img src="{{asset('assets/img/undraw_posting_photo.svg')}}" class="img-thumbnail rounded" alt="..." style="max-width: 25%">
                                        </div>

                                        <div class="form-group">

                                            <!--Nama-->
                                            <div class="mb-3">
                                                <label for="nama">Nama</label>

                                                <input type="text" class="form-control" name="nama_siswa" id=""
                                                       aria-describedby="emailHelpId"
                                                       placeholder="{{$siswa['nama_siswa' ?? 'Tidak ada']}}" readonly>
                                            </div>
                                            <!--NIP/NIK-->
                                            <div class="mb-3">
                                                <label for="nama">NIS/NIK</label>

                                                <input type="text" class="form-control" name="nis" id=""
                                                       aria-describedby="emailHelpId"
                                                       placeholder="{{$siswa['nis'] ?? 'Tidak ada'}}" readonly>
                                            </div>
                                            <!--Email-->
                                            <div class="mb-3">
                                                <label for="email">email</label>

                                                <input type="email" class="form-control" name="email" id=""
                                                       aria-describedby="emailHelpId"
                                                       placeholder="{{$siswa['email'] ?? 'Tidak ada'}}" readonly>
                                            </div>
                                            <!--Telp-->
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="text">Telp</label>--}}

{{--                                                <input type="text" class="form-control" name="telp_guru" id=""--}}
{{--                                                       aria-describedby="emailHelpId"--}}
{{--                                                       placeholder="{{$siswa['telp_guru'] ?? 'Tidak ada'}}" readonly>--}}
{{--                                            </div>--}}

                                            <!--Jenis Kelamin-->
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="text">Jenis Kelamin</label>--}}

{{--                                                <input type="text" class="form-control" name="jenis_kelamin" id=""--}}
{{--                                                       aria-describedby="emailHelpId"--}}
{{--                                                       placeholder="{{$siswa['jenis_kelamin'] ?? 'Tidak ada'}}" readonly>--}}
{{--                                            </div>--}}

                                            <!--Alamat-->
{{--                                            <div class="mb-3">--}}

{{--                                                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>--}}
{{--                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"--}}
{{--                                                          placeholder="{{$siswa['alamat_guru'] ?? 'Tidak ada'}}" readonly></textarea>--}}
{{--                                            </div>--}}

                                            <!--Mapel-->
{{--                                            <div class="mb-3">--}}
{{--                                                <label for="text">Mata Pelajaran</label>--}}

{{--                                                <input type="text" class="form-control" name="id_mapel" id=""--}}
{{--                                                       aria-describedby="emailHelpId"--}}
{{--                                                       placeholder="{{$mapel['id_mapel'] ?? 'Tidak ada'}}" readonly>--}}
{{--                                            </div>--}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <a name="" id="" class="btn btn-outline-danger col-12" href="{{url('/admin/daftar_siswa')}}" role="button">Kembali</a>
                        </div>
                    </div>
                </main>
            </div>
            @include('livewire.dashboard.component.footer')
        </div>

{{--<body id="page-top">--}}

{{--    <!-- Page Wrapper -->--}}
{{--    <div id="wrapper">--}}

{{--        @include('livewire.dashboard.component.nav')--}}



{{--        <!-- Content Wrapper -->--}}
{{--        <div id="content-wrapper" class="d-flex flex-column">--}}

{{--            <!-- Main Content -->--}}
{{--            <div id="content">--}}
{{--                @include('livewire.dashboard.component.topbar')--}}

{{--                <!-- Begin Page Content -->--}}
{{--                <div class="container-fluid">--}}
{{--                    <div class="form-group">--}}
{{--                      <label for="nama">Nama</label>--}}
{{--                      <input type="email" class="form-control" name="nama" id="" aria-describedby="emailHelpId" placeholder="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                    @include('livewire.dashboard.component.footer')--}}
{{--                </div>--}}
{{--                <!-- End of Main Content -->--}}
{{--            </div>--}}
{{--        </div>--}}
</div>
