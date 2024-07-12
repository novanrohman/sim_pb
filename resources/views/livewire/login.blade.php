<div>
    @slot('title')
        Login - Sistem Presensi
    @endslot



    <!--Login-->
    <div class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Masuk</h3>
                                    </div>
                                    <div class="card-body">
                                        <form wire:submit='login'>
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email"
                                                    placeholder="name@example.com" wire:model.defer='email'
                                                    name="email" />
                                                <label for="inputEmail">Email</label>

                                                @error('email')
                                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password"
                                                    placeholder="Password" wire:model.defer='password'
                                                    name="password" />
                                                <label for="inputPassword">Kata Sandi</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword"
                                                    type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Ingat kata sandi</label>

                                                @error('email')
                                                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                @enderror

                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Lupa password</a>
                                                <button type="submit" class="btn btn-primary">Masuk</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{ url('register') }}">Belum punya akun? Buat akun</a></div>
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
    <!--Login End-->
    
</div>
