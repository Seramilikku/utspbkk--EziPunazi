<!-- resources/views/sanksis/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Sanksi</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">ID Sanksi: {{ $sanksi->id_sanksi }}</h5>
            <p class="card-text">ID Anggota: {{ $sanksi->id_anggota }}</p>
            <p class="card-text">ID Peminjaman: {{ $sanksi->id_peminjaman }}</p>
            <p class="card-text">Jumlah Denda: {{ $sanksi->jumlah_denda }}</p>
            <p class="card-text">Status: {{ $sanksi->status }}</p>
            <a href="{{ route('sanksis.edit', $sanksi->id_sanksi) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('sanksis.destroy', $sanksi->id_sanksi) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus sanksi ini?')">Hapus</button>
            </form>
            <a href="{{ route('sanksis.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
