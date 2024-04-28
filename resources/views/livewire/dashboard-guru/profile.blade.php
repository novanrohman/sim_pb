<div>
    @slot('title')
        Guru - Sistem Presensi
    @endslot

    <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('livewire.dashboard-guru.component.nav')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('livewire.dashboard-guru.component.topbar')
                <div class="container-fluid">
                    <div class="col-md-12 col-sm-12">
                        <div class="d-flex align-content-center">
                            <img src="{{ asset('assets/img/undraw_profile.svg') }}" class="mx-auto rounded-circle float-left" style="max-width: 120px" alt="...">
                        </div>
                        <h4 class="text-center p-3">{{strtoupper($gurus['nama_guru'])}}</h4>

                    </div>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                        </div>
                        <div class="card-body">
                            <form action="">
                                <div class="mb-3"><label for="exampleFormControlInput1">Nama</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{strtoupper($gurus['nama_guru'])??'Tidak Ada'}}" readonly></div>
                                <div class="mb-3"><label for="exampleFormControlInput1">NIP</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{$gurus['nip']??'Tidak Ada'}}" readonly></div>
                                <div class="mb-3"><label for="exampleFormControlInput1">Email</label><input class="form-control" id="exampleFormControlInput1" type="email" placeholder="{{$gurus['email']??'Tidak Ada'}}" readonly></div>
                                <div class="mb-3"><label for="exampleFormControlInput1">Telepon</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{$gurus['telp']??'Tidak Ada'}}" readonly></div>
                                <div class="mb-3"><label for="exampleFormControlInput1">Jenis kelamin</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{$gurus['jenis_kelamin']??'Tidak Ada'}}" readonly></div>
                                <div class="mb-3"><label for="exampleFormControlInput1">Alamat</label><input class="form-control" id="exampleFormControlInput1" type="text" placeholder="{{$gurus['alamat']??'Tidak Ada'}}" readonly></div>
                                <div class="d-flex">
                                    <button class="btn btn-outline-primary ml-auto" type="button">Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
                @include('livewire.dashboard.component.footer')

            <!-- End of Main Content -->
        </div>
    </div>
</div>

