<div>
    @slot('title')
        Register Pegawai - Sistem Presensi
    @endslot

    <body class="bg-gradient-primary">
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Buat Akun Pegawai!</h1>
                                </div>
                                <form class="user" wire:submit='storePegawai'>
                                    @csrf
                                    <div class="form-group">
                                        <input wire:model='nama_pegawai' type="text" class="form-control form-control-user"
                                            id="namaDepan" placeholder="Nama Lengkap">
                                        @error('nama')
                                            <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input wire:model='email' type="email" class="form-control form-control-user"
                                            id="email" placeholder="Alamat Email">
                                        @error('email')
                                            <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input wire:model='password' type="password"
                                                class="form-control form-control-user" id="pasword"
                                                placeholder="Kata Sandi">
                                            @error('password')
                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="ulangiPasword" placeholder="Ulangi Kata Sandi">
                                            @error('password')
                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Buat Akun
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Pasword?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ url('/') }}">Sudah punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>
