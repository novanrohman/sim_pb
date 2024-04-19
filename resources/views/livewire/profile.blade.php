<div>
    @slot('title')
       Profil - Sistem Presensi
    @endslot

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            @if ($i == 0) {{-- admin --}}
                @include('livewire.dashboard.component.nav')
            @elseif($i == 1) {{-- guru --}}
                @include('livewire.dashboard.component.nav')
            @elseif($i == 2) {{-- siswa --}}
                @include('livewire.dashboard.component.nav')
            @elseif($i == 3) {{-- pegawai --}}
                @include('livewire.dashboard.component.nav')
            @elseif($i == 4) {{-- kepala_sekolah --}}
                @include('livewire.dashboard.component.nav')
            @endif

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">
                    @include('livewire.dashboard.component.topbar')

                    <div class="container-fluid">
                        <div class="profile mx-auto">
                            <img class=" rounded-circle" src="assets/img/undraw_profile.svg">
                        </div>

                        <div class="text-center p-3">
                            <h5>Douglas McGee</h5>
                        </div>

                        <div class="data">
                            @if($i==0)
                            <form>
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                  <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="admin@example.com">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                                  <div class="col-sm-10">
                                    <input type="telp" class="form-control" id="telp">
                                  </div>
                                </div>
                                @elseif($i==1)
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="guru@example.com">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                      <input type="telp" class="form-control" id="telp">
                                    </div>
                                  </div>
                                @elseif($i==2)
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="siswa@example.com">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                      <input type="telp" class="form-control" id="telp">
                                    </div>
                                  </div>
                                @elseif($i==3)
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="pegawai@example.com">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                      <input type="telp" class="form-control" id="telp">
                                    </div>
                                  </div>
                                @elseif($i==4)
                                <div class="form-group row">
                                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="kepala.sekolah@example.com">
                                    </div>
                                  </div>
                                  <div class="form-group row">
                                    <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                      <input type="telp" class="form-control" id="telp">
                                    </div>
                                  </div>
                            @endif
                           
                                {{-- Edit --}}
                                <div class="d-flex p-2">
                                    <input class="btn btn-outline-primary mx-auto" style="min-width: 20vw" type="button" value="Edit">
                                </div>
                                <div class="d-flex p-2">
                                    <input class="btn btn-primary mx-auto" style="min-width: 20vw" type="button" value="Simpan">
                                </div>
                                <div class="d-flex p-2">
                                    <input class="btn btn-danger mx-auto" style="min-width: 20vw" type="button" value="Batal">
                                </div>


                              </form>
                        </div>
                    </div>

                    @include('livewire.dashboard.component.footer')
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
</div>
