<div>
    @slot('title')
        Guru - Sistem Presensi
    @endslot

    @include('livewire.dashboard.component.topbar')
    @include('livewire.dashboard.component.nav')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Guru</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Daftar guru</li>
            </ol>
            <main>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Daftar Guru
                    </div>
                    <div class="card-body" wire:after="initializeDataTables">
                        <table id="" class="table table-striped">
                            <thead class="text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Telp</th>
                                <th>Mapel</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--Data guru-->
                            @forelse($gurus as $guru => $value)
                                <tr class="text-center">
                                    <td>{{$guru+1}}</td>
                                    <td>{{$value['nama_guru']}}</td>
                                    <td>{{$value['nip']}}</td>
                                    <td>{{$value['telp_guru'] ??'Belum ada'}}</td>
                                    <td>{{$value['mapel_name'] ??'Belum ada'}}</td>
                                    <td>
                                        <a wire:click="detailGuru({{$value['id']}})"
                                           class="btn btn-primary"
                                           type="button">Detail</a>

                                        <!--Delete Button-->
                                        <button class="btn btn-outline-danger"
                                                wire:confirm="Yakin ingin dihapus?"
                                                wire:click="delete({{$value['id']}})">Hapus
                                        </button>
                                        <!--End Delete Button-->

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
</div>



