
@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h2>Daftar Mahasiswa</h2>

    @if (collect($mahasiswa)->where('ipk', '<', 2.0)->isNotEmpty())
        <div class="alert">
            Ada mahasiswa dengan IPK di bawah 2,0.
        </div>
    @endif

    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>IPK</th>
            <th>Keterangan</th>
            <th>Detail</th>
        </tr>

        @forelse ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['ipk'] }}</td>
                <td>
                    @if ($mhs['ipk'] >= 3.5)
                        Cum Laude
                    @elseif ($mhs['ipk'] >= 3.0)
                        Baik
                    @else
                        Perlu ditingkatkan
                    @endif
                </td>
                <td>
                    <a href="{{ route('mahasiswa.detail', $mhs['nim']) }}">
                        Detail
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data</td>
            </tr>
        @endforelse
    </table>
@endsection
