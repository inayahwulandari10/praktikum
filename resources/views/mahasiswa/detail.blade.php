
@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h2>Detail Mahasiswa</h2>

    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>NIM: {{ $mhs['nim'] }}</p>
    <p>IPK: {{ $mhs['ipk'] }}</p>

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke Daftar
    </a>
@endsection
