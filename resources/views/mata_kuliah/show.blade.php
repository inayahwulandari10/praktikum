
@extends('layouts.app')

@section('title', 'Detail Mata Kuliah')

@section('content')

<div class="card">
    <h2>Detail Mata Kuliah</h2>
    <p class="subtitle">
        Informasi lengkap data mata kuliah.
    </p>

    <div class="detail-item">
        <strong>Kode Mata Kuliah</strong>
        <p>{{ $mata_kuliah->kode_matakuliah }}</p>
    </div>

    <div class="detail-item">
        <strong>Nama Mata Kuliah</strong>
        <p>{{ $mata_kuliah->nama_matakuliah }}</p>
    </div>

    <div class="detail-item">
        <strong>Jumlah SKS</strong>
        <p>{{ $mata_kuliah->sks }} SKS</p>
    </div>

    <div class="detail-item">
        <strong>Tanggal Dibuat</strong>
        <p>{{ $mata_kuliah->created_at }}</p>
    </div>

    <div class="detail-item">
        <strong>Tanggal Diperbarui</strong>
        <p>{{ $mata_kuliah->updated_at }}</p>
    </div>

    <br>

    <a href="{{ route('mata-kuliah.index') }}"
       class="btn btn-secondary">
        Kembali ke Daftar
    </a>
</div>

@endsection
