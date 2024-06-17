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
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="container-fluid">

                                    <div class="text-center">
                                        <img src="{{ asset('assets/img/undraw_posting_photo.svg') }}"
                                            class="img-thumbnail rounded" alt="..." style="max-width: 25%">
                                    </div>

                                    <div class="form-group">

                                        <!--Nama-->
                                        <div class="mb-3">
                                            <label for="nama">Nama</label>

                                            <input type="text" class="form-control" name="nama_siswa" id=""
                                                aria-describedby="emailHelpId"
                                                placeholder="{{ $siswa['nama_siswa' ?? 'Tidak ada'] }}" readonly>
                                        </div>
                                        <!--NIP/NIK-->
                                        <div class="mb-3">
                                            <label for="nama">NIS/NIK</label>

                                            <input type="text" class="form-control" name="nis" id=""
                                                aria-describedby="emailHelpId"
                                                placeholder="{{ $siswa['nis'] ?? 'Tidak ada' }}" readonly>
                                        </div>
                                        <!--Email-->
                                        <div class="mb-3">
                                            <label for="email">email</label>

                                            <input type="email" class="form-control" name="email" id=""
                                                aria-describedby="emailHelpId"
                                                placeholder="{{ $siswa['email'] ?? 'Tidak ada' }}" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <a   class="btn btn-outline-danger col-12 mb-4" href="{{ url('/admin/daftar_siswa') }}" role="button">Kembali</a>
                        <a  class="btn btn-outline-warning col-12" wire:click='edit({{ $siswa['id'] }})' role="button">Edit</a>
                    </div>
                </div>
            </main>
        </div>
        @include('livewire.dashboard.component.footer')
    </div>
</div>
