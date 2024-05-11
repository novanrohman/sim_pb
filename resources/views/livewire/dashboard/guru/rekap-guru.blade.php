<!--TODO (feat): rekap presensi guru-->


<div>
    @slot('title')
        Guru - Sistem Presensi
    @endslot

    <!--Rekap Guru-->
        @include('livewire.dashboard.component.topbar')
        @include('livewire.dashboard.component.nav')
        <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <h1 class="mt-4">Guru</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Rekap presensi guru</li>
                </ol>
                <main>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Rekap
                        </div>
                        <div class="card-body" wire:after="initializeDataTables">
                            <table id="" class="table table-striped">
                                <thead>
                                <tr class="text-center">
                                    <th rowspan="2" class="align-middle">No</th>
                                    <th rowspan="2" class="align-middle">Nama</th>
                                    <th rowspan="2" class="align-middle">NIP</th>
                                    <th colspan="4">Status</th>
                                </tr>
                                <tr class="text-center">
                                    <th>Hadir</thc>
                                    <th>Alpha</th>
                                    <th>Izin</th>
                                    <th>Sakit</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-center">
                                    <td>01</td>
                                    <td>Tiger Nixon Albara Name Sata</td>
                                    <td>1231231312</td>
                                    <td>18</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>2</td>
                                </tr>
                                <!--Data guru-->
{{--                                @forelse()--}}
{{--                                    <tr>--}}
{{--                                        <td>{{$guru+1}}</td>--}}
{{--                                        <td>{{$value['nama_guru']}}</td>--}}
{{--                                        <td>{{$value['nip']}}</td>--}}
{{--                                        <td>{{$value['telp'] ??'Belum ada'}}</td>--}}
{{--                                        <td>{{$value['matapelajaran']??'Belum ada'}}</td>--}}
{{--                                        <td>--}}
{{--                                            <a wire:click="detailGuru"--}}
{{--                                               class="btn btn-primary"--}}
{{--                                               type="button">Detail</a>--}}

{{--                                            <!--Delete Button-->--}}
{{--                                            <button class="btn btn-danger"--}}
{{--                                                    wire:confirm="Yakin ingin dihapus?"--}}
{{--                                                    wire:click="delete({{$value['id']}})">Hapus--}}
{{--                                                <div wire:loading>Loading...</div>--}}
{{--                                            </button>--}}
{{--                                            <!--End Delete Button-->--}}

{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @empty--}}
{{--                                @endforelse--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
            @include('livewire.dashboard.component.footer')
        </div>
</div>
    <!--End rekap Guru-->
</div>
