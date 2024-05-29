<div>
    @slot('title')
        Pegawai - Sistem Presensi
    @endslot

    @include('livewire.dashboard.component.topbar')
    @include('livewire.dashboard.component.nav')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Pegawai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Daftar pegawai</li>
            </ol>
            <main>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Pegawai
                    </div>
                    <div class="card-body" wire:after="initializeDataTables">
                        <table id="" class="table table-striped">
                            <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Jabatan</th>
                                <th>Telp</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--Data siswa-->
                                                        @forelse($pegawais as $pegawai => $value)
                                                            <tr class="text-center">
                                                                <td>{{$pegawai+1}}</td>
                                                                <td>{{$value['nama_pegawai']}}</td>
                                                                <td>{{$value['nip']}}</td>
                                                                <td>{{$value['jabatan'] ??'Belum ada'}}</td>
                                                                <td>{{$value['telp'] ??'Belum ada'}}</td>
{{--                                                                <td>{{$value['matapelajaran']??'Belum ada'}}</td>--}}
                                                                <td>
                                                                    <a wire:click="detailGuru"
                                                                       class="btn btn-primary"
                                                                       type="button">Detail</a>

                                                                    <!--Delete Button-->
                                                                    <button class="btn btn-danger"
                                                                            wire:confirm="Yakin ingin dihapus?"
                                                                            wire:click="delete({{$value['id']}})">Hapus
                                                                        <div wire:loading>Loading...</div>
                                                                    </button>
                                                                    <!--End Delete Button-->

                                                                </td>
                                                            </tr>
                                                        @empty
                                                        @endforelse
                            <!--End data siswa-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        @include('livewire.dashboard.component.footer')
    </div>
</div>
