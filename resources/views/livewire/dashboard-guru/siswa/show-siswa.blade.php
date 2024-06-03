<div>
    {{-- Do your work, then step back. --}}
    <form wire:submit.defer='submitPresensi'>
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
                @if(!empty($siswas))
                    
                
                @foreach ($siswas as $index => $value)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $value->nama_siswa }}</td>
                        {{-- <td>{{ $value->kelas ? $value->kelas->kelas : 'N/A' }}</td> --}}
                        <td>
                            <select class="form-control" id="exampleFormControlSelect1" wire:model="presensi>
                                <option selected class="font-weight-bold">Status</option>
                                <option value="Hadir">Hadir</option>
                                <option value="Izin">Izin</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Alpha">Alpha</option>
                            </select>
                        </td>
                    </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </form>
    <button  type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
</div>
