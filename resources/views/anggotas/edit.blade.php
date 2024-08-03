<!-- resources/views/anggotas/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Anggota</h1>

    <form action="{{ route('anggotas.update', $anggota->id_peminjaman) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ $anggota->nama }}" required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $anggota->no_hp }}" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required>{{ $anggota->alamat }}</textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $anggota->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
