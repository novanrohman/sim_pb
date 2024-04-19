<div>
    @slot('title')
        Register - Sistem Presensi
    @endslot

    <body  class="bg-gradient-primary">
        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                                </div>
                                <form class="user">
                                    @csrf
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="namaDepan"
                                                placeholder="Nama Depan">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="namaBelakang"
                                                placeholder="Nama Belakang">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nisn"
                                            placeholder="NISN">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="Alamat Email">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                id="pasword" placeholder="Kata Sandi">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="ulangiPasword" placeholder="Ulangi Kata Sandi">
                                        </div>
                                    </div>
                                    <a href="login.html" class="btn btn-primary btn-user btn-block">
                                        Buat Akun
                                    </a>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Lupa Pasword?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="{{ url("/login") }}">Sudah punya akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
</div>
