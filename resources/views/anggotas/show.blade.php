<!-- resources/views/anggotas/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Anggota</h1>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" id="nama" value="{{ $anggota->nama }}" readonly>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">No HP</label>
        <input type="text" class="form-control" id="no_hp" value="{{ $anggota->no_hp }}" readonly>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <textarea class="form-control" id="alamat" readonly>{{ $anggota->alamat }}</textarea>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" value="{{ $anggota->email }}" readonly>
    </div>
    <a href="{{ route('anggotas.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
