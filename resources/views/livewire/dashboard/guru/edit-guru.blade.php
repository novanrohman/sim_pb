<div>
    <div>
        @slot('title')
            Siswa - Sistem Presensi
        @endslot

        @include('livewire.dashboard.component.nav')
        @include('livewire.dashboard.component.topbar')

        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit guru</li>
                </ol>
                <main>
                    <div class="row">
                        <form method="POST" wire:submit.defer="update">
                            <div class="col-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="container-fluid">

                                            <div class="text-center">
                                                <img src="{{ asset('assets/img/undraw_posting_photo.svg') }}"
                                                    class="img-thumbnail rounded" alt="..." style="max-width: 25%">
                                            </div>

                                            <div class="form-group">

                                                <!--NIP/NIK-->
                                                <div class="mb-3">
                                                    <label for="nama">NIP/NIK</label>

                                                    <input type="text" class="form-control" name="nis"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['nip'] ?? 'Tidak ada' }}" readonly>
                                                </div>

                                                <!--Nama-->
                                                <div class="mb-3">
                                                    <label for="nama">Nama</label>

                                                    <input type="text" class="form-control" name="nama_guru"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['nama_guru' ?? 'Tidak ada'] }}" readonly>
                                                </div>

                                                <!--Email-->
                                                <div class="mb-3">
                                                    <label for="email">email</label>

                                                    <input type="email" class="form-control" name="email"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['email'] ?? 'Tidak ada' }}" readonly>
                                                </div>

                                                <!--Telp-->
                                                <div class="mb-3">
                                                    <label for="telp">Telepon</label>

                                                    <input type="telp" class="form-control" name="telp"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['telp_guru'] ?? 'Tidak ada. Tulis dengan +62xxxxxxxxxxx' }}"
                                                        readonly>
                                                </div>

                                                {{-- Jenis Kelamin --}}
                                                <div class="mb-3">
                                                    <label for="jenisKelamin">Jenis Kelamin</label>

                                                    <input type="text" class="form-control" name="jenisKelamin"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['jenis_kelamin'] ?? 'Tidak ada' }}"
                                                        readonly>
                                                </div>

                                                {{-- Alamat --}}
                                                <div class="mb-3">
                                                    <label for="alamat">Alamat</label>

                                                    <input type="text" class="form-control" name="alamat"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $guru['alamat_guru'] ?? 'Tidak ada' }}"
                                                        readonly>
                                                </div>

                                                {{-- Kelas --}}
                                                <div class="mb-3">
                                                    <label for="mapel">Mata Pelajaran</label>
                                                    <style>
                                                        .mh .dropdown-menu {
                                                            max-height: 20px;
                                                        }
                                                    </style>
                                                    <select wire:model.defer='id_mapel' data-spy="scroll" class="form-control scrollspy-example" data-offset="0"
                                                        name="mapel" id="" aria-describedby="emailHelpId"
                                                        placeholder="">
                                                        <div class="scrollspy-example" style="max-height: 10px">
                                                            <option>N/A</option>
                                                            @foreach ($mapel as $value)
                                                                <option value="{{ $value->id }}"
                                                                    {{ $value->id == $selectedmapel ? 'selected' : '' }}>
                                                                    {{ $value->id . ' ' . $value->mata_pelajaran }}
                                                                </option>
                                                            @endforeach
                                                        </div>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" name="" id=""
                                                        class="btn btn-success col-12" role="button">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">

                            </div>
                        </form>
                    </div>
                </main>
            </div>
            @include('livewire.dashboard.component.footer')
        </div>


    </div>

</div>
