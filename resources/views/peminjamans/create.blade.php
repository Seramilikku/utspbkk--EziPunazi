<!-- resources/views/peminjamans/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Peminjaman Baru</h1>
    <form action="{{ route('peminjamans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="no_buku">No Buku</label>
            <input type="number" class="form-control" id="no_buku" name="no_buku" required>
        </div>
        <div class="form-group">
            <label for="id_anggota">ID Anggota</label>
            <input type="number" class="form-control" id="id_anggota" name="id_anggota" required>
        </div>
        <div class="form-group">
            <label for="tgl_peminjaman">Tanggal Peminjaman</label>
            <input type="date" class="form-control" id="tgl_peminjaman" name="tgl_peminjaman" required>
        </div>
        <div class="form-group">
            <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian">
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="kembali">Kembali</option>
                <option value="belum">Belum</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('peminjamans.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
