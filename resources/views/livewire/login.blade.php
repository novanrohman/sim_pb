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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3>
                                    </div>
                                    <div class="card-body">
                                        <form wire:submit='login'>
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email"
                                                       placeholder="name@example.com" wire:model.live='email'
                                                       name="email"/>
                                                <label for="inputEmail">Email address</label>
                                                @error('email')
                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password"
                                                       placeholder="Password" wire:model.live='password' name="password"/>
                                                <label for="inputPassword">Password</label>
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword"
                                                       type="checkbox" value=""/>
                                                <label class="form-check-label" for="inputRememberPassword">Remember
                                                    Password</label>
                                                @error('email')
                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>
                                                <button type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
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
        </div>
    </div>
    <!--Login End-->
    {{--    <body  class="bg-gradient-primary">--}}
    {{--    <div class="container">--}}

    {{--        <!-- Outer Row -->--}}
    {{--        <div class="row justify-content-center">--}}

    {{--            <div class="col-xl-10 col-lg-12 col-md-9">--}}

    {{--                <div class="card o-hidden border-0 shadow-lg my-5">--}}
    {{--                    <div class="card-body p-0">--}}
    {{--                        <!-- Nested Row within Card Body -->--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>--}}
    {{--                            <div class="col-lg-6">--}}
    {{--                                <div class="p-5">--}}
    {{--                                    <div class="text-center">--}}
    {{--                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>--}}
    {{--                                    </div>--}}
    {{--                                    <form class="user" wire:submit='login'>--}}
    {{--                                        @csrf--}}
    {{--                                        <div class="form-group">--}}
    {{--                                            <input type="email" name="email" wire:model.live='email' class="form-control form-control-user"--}}
    {{--                                                id="email" aria-describedby="emailHelp"--}}
    {{--                                                placeholder="Masukan Alamat Email...">--}}
    {{--                                            @error('email')--}}
    {{--                                            <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
    {{--                                            @enderror--}}
    {{--                                        </div>--}}
    {{--                                        <div class="form-group">--}}
    {{--                                            <input type="password" name="password" wire:model.live='password' class="form-control form-control-user"--}}
    {{--                                                id="exampleInputPassword" placeholder="Pasword">--}}
    {{--                                                @error('password')--}}
    {{--                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>--}}
    {{--                                                @enderror--}}
    {{--                                        </div>--}}
    {{--                                        <div class="form-group">--}}
    {{--                                            <div class="custom-control custom-checkbox small">--}}
    {{--                                                <input type="checkbox" class="custom-control-input" id="customCheck">--}}
    {{--                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>--}}
    {{--                                            </div>--}}
    {{--                                        </div>--}}
    {{--                                        <button type="submit" wire:confirm="Benar ingin login?" class="btn btn-primary btn-user btn-block">--}}
    {{--                                            Masuk--}}
    {{--                                        </button>--}}

    {{--                                    </form>--}}
    {{--                                    <hr>--}}
    {{--                                    <div class="text-center">--}}
    {{--                                        <a class="small" href="forgot-password.html">Lupa Password?</a>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="text-center">--}}
    {{--                                        <a class="small" href="{{ url("/register") }}">Buat Akun!</a>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--            </div>--}}

    {{--        </div>--}}

    {{--    </div>--}}
</div>
