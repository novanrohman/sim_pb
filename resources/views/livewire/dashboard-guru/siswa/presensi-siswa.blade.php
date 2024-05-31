<div>
    @slot('title')
        {{ $title }}
    @endslot

    @include('livewire.dashboard-guru.component.topbar')
    @include('livewire.dashboard-guru.component.nav')

    {{-- Presensi siswa --}}
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Presensi Siswa</h1>

                <div class="card mb-4">
                    <div class="card-body">
                        {{-- Filter --}}
                        @livewire('dashboard-guru.siswa.filter')
                        {{-- <form class="form-group" wire:model.debounce='selectedCategory'>
                            <label for="">Jurusan</label>
                            <label for="Select" class="form-label">Kelas</label>
                    
                            <select  wire:model='selectedCategory' id="Select" class="form-select" name="selectedCategory">
                                <option value="">Select a class</option>
                                @foreach ($kelas as $kelasItem)
                                    <option  value="{{ $kelasItem->id }}">{{ $kelasItem->id . $kelasItem->kelas }}</option>
                                @endforeach
                            </select>
                            <input type="text" name="" id="" value="{{ $selected }}">
                        </form> --}}
                    </div>
                </div>  

                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Presensi {{ date('Y/m/d') }}
                    </div>
                    <div class="card-body">
                        {{-- {{ dd($siswas) }} --}}
                        
                        @if ($selectedCategory)
                            @if ($siswas != null)
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Nama</th>
                                            <th>Kelas</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- {{ dd($siswas) }} --}}
                                        @foreach ($siswas as $index => $value)
                                            <tr>
                                                {{-- <td></td> --}}
                                                <td>{{ $index + 1 + ($siswas->currentPage() - 1) * $siswas->perPage() }}</td>
                                                <td>{{ $value->nama_siswa }}</td>
                                                <td>{{ $value->kelas ? $value->kelas->kelas : 'N/A' }}</td>
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
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $siswas->links('pagination::bootstrap-4') }}
                            @else
                                <p>Data tidak ditemukan</p>
                            @endif
                        @else
                            <p>Please select a class to view students.</p>
                        @endif
                        <button type="button" class="btn btn-primary btn-lg btn-block">Simpan</button>
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
</div>
