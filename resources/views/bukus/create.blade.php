<!-- resources/views/bukus/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Buku Baru</h1>
    <form action="{{ route('bukus.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="edisi">Edisi</label>
            <input type="text" class="form-control" id="edisi" name="edisi" required>
        </div>
        <div class="form-group">
            <label for="no_rak">No Rak</label>
            <input type="text" class="form-control" id="no_rak" name="no_rak" required>
        </div>
        <div class="form-group">
            <label for="tahun">Tahun</label>
            <input type="date" class="form-control" id="tahun" name="tahun" required>
        </div>
        <div class="form-group">
            <label for="penerbit">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" required>
        </div>
        <div class="form-group">
            <label for="kd_penulis">Kode Penulis</label>
            <input type="text" class="form-control" id="kd_penulis" name="kd_penulis" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
