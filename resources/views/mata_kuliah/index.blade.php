
@extends('layouts.app')

@section('title', 'Daftar Mata Kuliah')

@section('content')

<div class="card">
    <h2>Daftar Mata Kuliah</h2>
    <p class="subtitle">
        Kelola data mata kuliah dengan mudah dan praktis.
    </p>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('mata-kuliah.create') }}"
       class="btn btn-primary">
        + Tambah Mata Kuliah
    </a>

    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($mata_kuliahs as $index => $mk)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $mk->kode_matakuliah }}</td>
                <td>{{ $mk->nama_matakuliah }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    <a href="{{ route('mata-kuliah.show', $mk->id) }}"
                       class="btn btn-detail">
                        Detail
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="text-align:center">
                    Belum ada data mata kuliah.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
