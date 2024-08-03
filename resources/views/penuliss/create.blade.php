<!-- resources/views/penulises/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penulis Baru</h1>
    <form action="{{ route('penuliss.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_penulis">Nama Penulis</label>
            <input type="text" class="form-control" id="nama_penulis" name="nama_penulis" required>
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('penuliss.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
