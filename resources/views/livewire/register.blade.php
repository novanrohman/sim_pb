<div>
    @slot('title')
        Register Admin - Sistem Presensi
    @endslot

    <!--Register-->
    <div class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create
                                            Account</h3></div>
                                    <div class="card-body">
                                        <form wire:submit='storeUser'>
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="text"
                                                       placeholder="Nama lengkap" wire:model.live='nama'/>
                                                <label for="inputFirstName">Nama lengkap</label>
                                                @error('nama')
                                                <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email"
                                                       placeholder="name@example.com" wire:model.live='email'/>
                                                <label for="inputEmail">Email address</label>
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
                                                        <label for="inputPassword">Password</label>
                                                        @error('password')
                                                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm"
                                                               type="password" placeholder="Confirm password"/>
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        @error('password')
                                                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary btn-block">Create
                                                        Account
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
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
    <!--Register End-->


</div>
