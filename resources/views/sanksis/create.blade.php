<!-- resources/views/sanksis/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Sanksi Baru</h1>
    <form action="{{ route('sanksis.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_anggota">ID Anggota</label>
            <input type="number" class="form-control" id="id_anggota" name="id_anggota" required>
        </div>
        <div class="form-group">
            <label for="id_peminjaman">ID Peminjaman</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" required>
        </div>
        <div class="form-group">
            <label for="jumlah_denda">Jumlah Denda</label>
            <input type="number" class="form-control" id="jumlah_denda" name="jumlah_denda" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="tunggakan">Tunggakan</option>
                <option value="lunas">Lunas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('sanksis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
