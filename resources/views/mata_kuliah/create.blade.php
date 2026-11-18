
@extends('layouts.app')

@section('title', 'Tambah Mata Kuliah')

@section('content')

<div class="card">
    <h2>Tambah Mata Kuliah</h2>
    <p class="subtitle">
        Silakan isi formulir berikut untuk menambahkan data.
    </p>

    @if($errors->any())
        <div class="error">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('mata-kuliah.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Kode Mata Kuliah</label>
            <input type="text"
                   name="kode_matakuliah"
                   value="{{ old('kode_matakuliah') }}"
                   placeholder="Contoh: TI101"
                   required>
        </div>

        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input type="text"
                   name="nama_matakuliah"
                   value="{{ old('nama_matakuliah') }}"
                   placeholder="Masukkan nama mata kuliah"
                   required>
        </div>

        <div class="form-group">
            <label>Jumlah SKS</label>
            <input type="number"
                   name="sks"
                   min="1"
                   max="6"
                   value="{{ old('sks') }}"
                   placeholder="Masukkan jumlah SKS"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan Data
        </button>

        <a href="{{ route('mata-kuliah.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>

@endsection
