<div>


    @slot('title')
        Guru - Sistem Presensi
    @endslot

    @include('livewire.dashboard.component.topbar')
    @include('livewire.dashboard.component.nav')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <main>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Telp</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Telp</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @forelse($gurus as $guru)
                                <tr>
                                    <td>{{$guru->nama_guru}}</td>
                                    <td>{{$guru->nip}}</td>
                                    <td>{{$guru->telp??'Belum ada'}}</td>
                                    <td>{{$guru->matapelajaran->mata_pelajaran??'Belum ada'}}</td>
                                    <td>
                                        <a wire:click="detailGuru"
                                           class="btn btn-primary"
                                           type="button">Detail</a>
                                        <button class="btn btn-danger"
                                                wire:confirm="Yakin ingin dihapus?"
                                                wire:click="delete()">Hapus
                                            <div wire:loading>Loading...</div>
                                        </button>

                                    </td>
                                </tr>
                            @empty
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        @include('livewire.dashboard.component.footer')
    </div>


    {{--    <body id="page-top">--}}

    {{--        <!-- Page Wrapper -->--}}
    {{--        <div id="wrapper">--}}

    {{--            @include('livewire.dashboard.component.nav')--}}

    {{--            <!-- Content Wrapper -->--}}
    {{--            <div id="content-wrapper" class="d-flex flex-column">--}}

    {{--                <!-- Main Content -->--}}
    {{--                <div id="content">--}}
    {{--                    @include('livewire.dashboard.component.topbar')--}}

    {{--                    <!-- Begin Page Content -->--}}
    {{--                    <div class="container-fluid">--}}

    {{--                        <!-- Page Heading -->--}}
    {{--                        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-md-5 col-sm-12">--}}
    {{--                                <div class="form-group">--}}
    {{--                                    --}}{{-- <label for="exampleFormControlSelect1">Jurusan</label> --}}
    {{--                                    <select class="form-control" id="exampleFormControlSelect1">--}}
    {{--                                        <option selected disabled class="font-weight-bold">Jurusan</option>--}}
    {{--                                        <option>1</option>--}}
    {{--                                        <option>2</option>--}}
    {{--                                        <option>3</option>--}}
    {{--                                        <option>4</option>--}}
    {{--                                        <option>5</option>--}}
    {{--                                    </select>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                            <div class="col-md-2">--}}
    {{--                                <a name="" id="" class="btn btn-primary" href="#" role="button">Cari</a>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <!-- DataTales Example -->--}}
    {{--                        <div class="card shadow mb-4">--}}
    {{--                            <div class="card-header py-3">--}}
    {{--                                <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>--}}
    {{--                            </div>--}}
    {{--                            <div class="card-body">--}}
    {{--                                <div class="table-responsive">--}}
    {{--                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">--}}
    {{--                                        <thead>--}}
    {{--                                            <tr>--}}
    {{--                                                <th>Nama</th>--}}
    {{--                                                <th>NIP</th>--}}
    {{--                                                <th>Telp</th>--}}
    {{--                                                <th>Mata Pelajaran</th>--}}
    {{--                                                <th>Aksi</th>--}}

    {{--                                            </tr>--}}
    {{--                                        </thead>--}}
    {{--                                        <tbody>--}}
    {{--                                        @forelse($gurus as $guru)--}}
    {{--                                            <tr>--}}
    {{--                                                <td>{{$guru->nama_guru}}</td>--}}
    {{--                                                <td>{{$guru->nip}}</td>--}}
    {{--                                                <td>{{$guru->telp??'Belum ada'}}</td>--}}
    {{--                                                <td>{{$guru->matapelajaran->mata_pelajaran??'Belum ada'}}</td>--}}
    {{--                                                <td>--}}
    {{--                                                    <a wire:click="detailGuru" class="btn btn-primary" type="button">Detail</a>--}}
    {{--                                                     <button class="btn btn-danger" wire:confirm="Yakin ingin dihapus?" wire:click="delete()">Hapus<div wire:loading>Loading...</div></button>--}}

    {{--                                                </td>--}}
    {{--                                            </tr>--}}
    {{--                                        @empty--}}
    {{--                                        @endforelse--}}
    {{--                                        </tbody>--}}
    {{--                                    </table>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                    </div>--}}
    {{--                    <!-- /.container-fluid -->--}}

    {{--                    @include('livewire.dashboard.component.footer')--}}
    {{--                </div>--}}
    {{--                <!-- End of Main Content -->--}}
    {{--            </div>--}}
    {{--        </div>--}}
</div>

