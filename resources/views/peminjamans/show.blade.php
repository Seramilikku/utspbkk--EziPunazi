<!-- resources/views/peminjamans/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Peminjaman</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID Peminjaman: {{ $peminjaman->id_peminjaman }}</h5>
            <p class="card-text">No Buku: {{ $peminjaman->no_buku }}</p>
            <p class="card-text">ID Anggota: {{ $peminjaman->id_anggota }}</p>
            <p class="card-text">Tanggal Peminjaman: {{ $peminjaman->tgl_peminjaman }}</p>
            <p class="card-text">Tanggal Pengembalian: {{ $peminjaman->tgl_pengembalian ?: '-' }}</p>
            <p class="card-text">Status: {{ $peminjaman->status }}</p>
            <a href="{{ route('peminjamans.edit', $peminjaman->id_peminjaman) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('peminjamans.destroy', $peminjaman->id_peminjaman) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</button>
            </form>
            <a href="{{ route('peminjamans.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
