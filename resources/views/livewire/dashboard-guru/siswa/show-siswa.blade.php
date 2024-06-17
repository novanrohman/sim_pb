<div>
    {{-- Do your work, then step back. --}}
    <div class="card-body">
        {{-- flash --}}
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session()->has('empty'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('empty') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Table --}}
        <form wire:submit='savePresensi'>
            <table class="table table-striped">
                @if (!empty($siswas))
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($siswas as $index => $siswa)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $siswa->nis }}</td>
                                <td>{{ $siswa->nama_siswa }}</td>
                                <td>{{ $siswa->kelas ? $siswa->kelas->kelas : 'N/A' }}</td>
                                <td>
                                    <select class="form-control" wire:model="presensi.{{ $siswa->nis }}.status">
                                        <option value="" selected>Pilih Status</option>
                                        <option value="Hadir">Hadir</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Alpha">Alpha</option>
                                    </select>
                                </td>
                            </tr>

                            {{-- <td>{{ $index + 1 }}</td>
                            <td><input type="text" wire:model='presensi'
                                    disabled value="{{ $value->nis }}"></input>{{ $value->nis }}</td>
                            <td>{{ $value->nama_siswa }}</td>
                            <td>{{ $value->kelas ? $value->kelas->kelas : 'N/A' }}</td>
                            <td>
                                <select class="form-control" id="exampleFormControlSelect1" wire:model="presensi.{{ $value->nis }}.status">
                                    <option selected class="font-weight-bold">Pilih Status</option>
                                    <option value="Hadir">Hadir</option>
                                    <option value="Izin">Izin</option>
                                    <option value="Sakit">Sakit</option>
                                    <option value="Alpha">Alpha</option>
                                </select>
                            </td> --}}
                            </tr>
                        @endforeach
                        {{-- @endif --}}
                        {{-- <td colspan="4" class="text-center">Pilih kelas terlebih dahulu</td> --}}
                    </tbody>
                    {{-- </form> --}}
                @else
                    <p class="text-center ">Tidak ada data siswa, pilih kelas!</p>
                @endif
            </table>

            @if (!empty($siswas))
                <button type="submit" class="btn btn-primary btn-md btn-block">Simpan</button>
            @endif
        </form>
    </div>
</div>
