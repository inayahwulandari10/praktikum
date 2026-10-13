<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = 'Inayah Wulandari';
        $nim = '242520009';
        $prodi = 'Teknik Informatika';

        return view('mahasiswa.profil', compact(
            'nama', 'nim', 'prodi'
        ));
    }

    public function daftar()
    {
        $mahasiswa = [
            ['nama' => 'Inayah Wulandari', 'nim' => '242520009', 'ipk' => 3.75],
            ['nama' => 'Andi Saputra', 'nim' => '242520010', 'ipk' => 3.80],
            ['nama' => 'Siti Aminah', 'nim' => '242520011', 'ipk' => 3.50],
            ['nama' => 'Budi Santoso', 'nim' => '242520012', 'ipk' => 3.20],
            ['nama' => 'Dewi Lestari', 'nim' => '242520013', 'ipk' => 2.80],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $mahasiswa = [
            ['nama' => 'Inayah Wulandari', 'nim' => '242520009', 'ipk' => 3.75],
            ['nama' => 'Andi Saputra', 'nim' => '242520010', 'ipk' => 3.80],
            ['nama' => 'Siti Aminah', 'nim' => '242520011', 'ipk' => 3.50],
            ['nama' => 'Budi Santoso', 'nim' => '242520012', 'ipk' => 3.20],
            ['nama' => 'Dewi Lestari', 'nim' => '242520013', 'ipk' => 2.80],
        ];

        $data = collect($mahasiswa)->firstWhere('nim', $nim);

        abort_if(!$data, 404);

        return view('mahasiswa.detail', [
            'mhs' => $data
        ]);
    }
}
