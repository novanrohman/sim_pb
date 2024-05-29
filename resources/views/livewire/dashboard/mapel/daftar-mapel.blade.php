<div>

    @slot('title')
        Mata Pelajaran - Sistem Presensi
    @endslot

    @include('livewire.dashboard.component.topbar')
    @include('livewire.dashboard.component.nav')
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Mata Pelajaran</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Daftar Mata Pelajaran</li>
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
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                {{-- Add Mapel --}}
                <div class="card mb-4">
                    <div class="card-header">Tambah Mapel</div>
                    <div class="card-body">
                        <form wire:submit='storeMapel'>
                            <div class="row mb-4">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama Mapel</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="mata_pelajaran" wire:model='mata_pelajaran'
                                            aria-describedby="emailHelp">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Semester</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            name="semester" wire:model='semester' aria-describedby="emailHelp">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary w-100" role="button">Tambah</button>
                        </form>
                    </div>
                </div>

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
                                    <th>Nama Mapel</th>
                                    <th>Semester</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--Data Mapel-->
                                @forelse ($mapels as $mapel => $value)
                                    <tr class="text-center">
                                        <td wire:key="$mapel + 1">{{ $mapel + 1 + ($mapels->currentPage() - 1) * $mapels->perPage()}}</td>
                                        <td wire:key="$mapel-{{ $value['mata_pelajaran']}}">{{ $value['mata_pelajaran'] }}</td>
                                        <td wire:key="$mapel-{{ $value['semester'] }}">{{ $value['semester'] }}</td>
                                        <td>
                                            {{-- <a wire:click="detailEdit({{ $value['id'] }})" class="btn btn-primary"
                                                type="button">Edit</a> --}}

                                            <!--Delete Button-->
                                            <button class="btn btn-outline-danger" wire:confirm="Yakin ingin dihapus?"
                                                wire:click="delete({{ $value['id'] }})">Hapus
                                            </button>
                                            <!--End Delete Button-->

                                        </td>
                                    </tr>
                                @empty
                                    <td colspan="3" class="text-center">Data tidak ditemukan</td>
                                @endforelse
                            </tbody>
                            <tfoot>
                                {{ $mapels->links('pagination::bootstrap-4') }}
                                
                            </tfoot>
                        </table>
                    </div>
                </div>
            </main>
        </div>
        @include('livewire.dashboard.component.footer')
    </div>
</div>
