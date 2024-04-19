<div>
    @slot('title')
    Guru - Sistem Presensi
@endslot

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('livewire.dashboard.component.nav')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                @include('livewire.dashboard.component.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="email" class="form-control" name="nama" id="" aria-describedby="emailHelpId" placeholder="">
                      </div>
                </div>
                    @include('livewire.dashboard.component.footer')
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
</div>
