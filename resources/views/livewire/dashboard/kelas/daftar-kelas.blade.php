<div>
    <div>

        @slot('title')
            Mata Pelajaran - Sistem Presensi
        @endslot

        @include('livewire.dashboard.component.topbar')
        @include('livewire.dashboard.component.nav')
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Kelas</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Daftar Kelas</li>
                </ol>
                <main>
                    {{-- flash --}}
                    @if (session()->has('add'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('add') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif (session()->has('delete'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('delete') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                    {{-- Add Mapel --}}
                    <div class="card mb-4">
                        <div class="card-header">Tambah Kelas</div>
                        <div class="card-body">
                            <form wire:submit='storeKelas'>
                                <div class="form-group mb-4">
                                    <label for="exampleInputEmail1">Nama Kelas</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        name="kelas" wire:model='addkelas' aria-describedby="emailHelp">
                                </div>
                                <button type="submit" class="btn btn-primary w-100" role="button">Tambah</button>
                            </form>
                        </div>
                    </div>
                    {{-- END Add Mapel --}}

                    {{-- Table --}}
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Daftar Mata Pelajaran
                        </div>
                        <div class="card-body" wire:after="initializeDataTables">
                            <table id="" class="table table-striped">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {{-- {{ dd($kelas) }} --}}

                                    <!--Data Kelas-->
                                    @forelse ($kelas as $key => $value)
                                    <tr class="text-center">
                                        <td >{{ $key + 1 + ($kelas->currentPage() - 1) * $kelas->perPage() }}</td>
                                        <td >{{ $value->kelas->kelas }}</td>
                                        <td>
                                            <a wire:click="detailEdit({{ '' }})" class="btn btn-primary"
                                                type="button">Edit</a>

                                            <!--Delete Button-->
                                            <button class="btn btn-outline-danger" wire:confirm="Yakin ingin dihapus?"
                                                wire:click="delete({{ $value->id }})">Hapus
                                            </button>
                                            <!--End Delete Button-->

                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="3" class="text-center">Data tidak ditemukan</td>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    {{ $kelas->links('pagination::bootstrap-4') }}

                                </tfoot>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
            @include('livewire.dashboard.component.footer')
        </div>
    </div>

</div>
