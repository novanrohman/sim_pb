<?php

namespace App\Livewire\DashboardGuru\Siswa;

use App\Models\Kelas;
use App\Models\Siswa;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class PresensiSiswa extends Component
{
    use WithPagination;

    public $categoryId;
    public $selectedCategory;
     public $perPage = 20;

    protected $updatesQueryString = [
        ['selectedCategory' => ['except' => '']],
        ['page' => ['except' => 1]],
    ];

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $kelas = Kelas::all();
        $siswas = '';
        $selected = $this->selectedCategory;

        if($this->selectedCategory){
            $query = Siswa::where('id_kelas', $this->selectedCategory);
            $siswas = $query->paginate($this->perPage);
        } 

        return view('livewire.dashboard-guru.siswa.presensi-siswa', [
            'title' => 'Presensi Siswa - Guru',
            'gurus' => Auth::guard('guru')->user(),
            'kelas' => $kelas,
            'siswas' => $siswas,
        ], compact('selected'));
    }
}
?>
