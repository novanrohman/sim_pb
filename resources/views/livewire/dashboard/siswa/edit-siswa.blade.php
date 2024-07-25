<div>
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
                    <li class="breadcrumb-item active">Detail siswa</li>
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
                                                    <label for="nama">NIS/NIK</label>

                                                    <input type="text" class="form-control" name="nis"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['nis'] ?? 'Tidak ada' }}" readonly>
                                                </div>

                                                <!--Nama-->
                                                <div class="mb-3">
                                                    <label for="nama">Nama</label>

                                                    <input type="text" class="form-control" name="nama_siswa"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['nama_siswa' ?? 'Tidak ada'] }}"
                                                        readonly>
                                                </div>

                                                <!--Email-->
                                                <div class="mb-3">
                                                    <label for="email">email</label>

                                                    <input type="email" class="form-control" name="email"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['email'] ?? 'Tidak ada' }}" readonly>
                                                </div>

                                                {{-- Tempat Lahir --}}
                                                <div class="mb-3">
                                                    <label for="tempatLahir">Tempat lahir</label>

                                                    <input type="text" class="form-control" name="tempatLahir"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['tempat_lahir'] ?? 'Tidak ada' }}"
                                                        readonly>
                                                </div>

                                                {{-- Tanggal Lahir --}}
                                                <div class="mb-3">
                                                    <label for="tanggalLahir">Tanggal lahir</label>

                                                    <input type="date" class="form-control" name="tanggalLahir"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['tanggal_lahir'] ?? 'Tidak ada' }}"
                                                        readonly>
                                                </div>

                                                {{-- Jenis Kelamin --}}
                                                <div class="mb-3">
                                                    <label for="jenisKelamin">Jenis Kelamin</label>

                                                    <input type="text" class="form-control" name="jenisKelamin"
                                                        id="" aria-describedby="emailHelpId"
                                                        placeholder="{{ $siswa['jenis_kelamin'] ?? 'Tidak ada' }}"
                                                        readonly>
                                                </div>
                                                {{-- Kelas --}}
                                                <div class="mb-3">
                                                    <label for="kelas">Kelas</label>

                                                    <select wire:model.defer='id_kelas'  class="form-control" name="kelas"
                                                        id="" aria-describedby="emailHelpId" placeholder="">
                                                        <option>N/A</option>
                                                        {{-- <option value="null" disabled>{{ __('Please select') }}</option> --}}
                                                        @foreach ($kelas as $value)
                                                            {{-- <option value="">{{ $value->kelas }}</option> --}}
                                                            <option value="{{ $value->id }}"
                                                                {{ $value->id == $selectedKelas ? 'selected' : '' }}>{{ $value->kelas }}</option>
                                                        @endforeach
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
