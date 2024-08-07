<div>
    @slot('title')
        Buat Akun Guru - Sistem Presensi
    @endslot

        <!--Register-->
        <div class="bg-primary">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 mb-3">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Buat Akun Guru</h3></div>
                                        <div class="card-body">
                                            <form wire:submit='storeGuru'>
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputFirstName" type="text"
                                                           placeholder="Nama lengkap" wire:model.live='nama_guru'/>
                                                    <label for="inputFirstName">Nama lengkap</label>
                                                    @error('nama_guru')
                                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputFirstName" type="text"
                                                           placeholder="NIP" wire:model.live='nip'/>
                                                    <label for="inputFirstName">NIP</label>
                                                    @error('nip')
                                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputEmail" type="email"
                                                           placeholder="name@example.com" wire:model.live='email'/>
                                                    <label for="inputEmail">Email</label>
                                                    @error('email')
                                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPassword" type="password"
                                                                   placeholder="Create a password"
                                                                   wire:model.live='password'/>
                                                            <label for="inputPassword">Kata Sandi</label>
                                                            @error('password')
                                                            <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-floating mb-3 mb-md-0">
                                                            <input class="form-control" id="inputPasswordConfirm"
                                                                   type="password" placeholder="Confirm password"/>
                                                            <label for="inputPasswordConfirm">Konfirmasi Kata Sandi</label>
                                                            @error('password')
                                                            <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4 mb-0">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary btn-block">Buat Akun
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-center py-3">
                                            <div class="small"><a href="{{ url('/') }}">Sudah Punya Akun? Login</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
                <div id="layoutAuthentication_footer">
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; SMK Puspa Bangsa 2023 | Develop by. Poliwangi</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        <!--Register End-->

{{--    <body class="bg-gradient-primary">--}}
{{--    <div class="container">--}}

{{--        <div class="card o-hidden border-0 shadow-lg my-5">--}}
{{--            <div class="card-body p-0">--}}
{{--                <!-- Nested Row within Card Body -->--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>--}}
{{--                    <div class="col-lg-7">--}}
{{--                        <div class="p-5">--}}
{{--                            <div class="text-center">--}}
{{--                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Guru!</h1>--}}
{{--                            </div>--}}
{{--                            <form class="user" wire:submit='storeGuru'>--}}
{{--                                @csrf--}}
{{--                                <div class="form-group">--}}
{{--                                    <input wire:model.live='nama_guru' type="text" class="form-control form-control-user"--}}
{{--                                           id="namaDepan" placeholder="Nama Lengkap">--}}
{{--                                    @error('nama_guru')--}}
{{--                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input wire:model.live='nip' type="text" class="form-control form-control-user"--}}
{{--                                           id="nip" placeholder="NIP">--}}
{{--                                    @error('nip')--}}
{{--                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input wire:model.live='email' type="email" class="form-control form-control-user"--}}
{{--                                           id="email" placeholder="Alamat Email">--}}
{{--                                    @error('email')--}}
{{--                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                                <div class="form-group row">--}}
{{--                                    <div class="col-sm-6 mb-3 mb-sm-0">--}}
{{--                                        <input wire:model.live='password' type="password"--}}
{{--                                               class="form-control form-control-user" id="pasword"--}}
{{--                                               placeholder="Kata Sandi">--}}
{{--                                        @error('password')--}}
{{--                                        <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                    <div class="col-sm-6">--}}
{{--                                        <input type="password" class="form-control form-control-user"--}}
{{--                                               id="ulangiPasword" placeholder="Ulangi Kata Sandi">--}}
{{--                                        @error('password')--}}
{{--                                        <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <button type="submit" class="btn btn-primary btn-user btn-block">--}}
{{--                                    Buat Akun--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                            <hr>--}}
{{--                            <div class="text-center">--}}
{{--                                <a class="small" href="forgot-password.html">Lupa Pasword?</a>--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <a class="small" href="{{ url('/') }}">Sudah punya akun? Login!</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
</div>
