<!-- resources/views/bukus/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Buku</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $buku->judul }}</h5>
            <p class="card-text">Edisi: {{ $buku->edisi }}</p>
            <p class="card-text">No Rak: {{ $buku->no_rak }}</p>
            <p class="card-text">Tahun: {{ $buku->tahun }}</p>
            <p class="card-text">Penerbit: {{ $buku->penerbit }}</p>
            <p class="card-text">Penulis: {{ $buku->penulis->nama_penulis }}</p>
            <a href="{{ route('bukus.edit', $buku->no_buku) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('bukus.destroy', $buku->no_buku) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
            </form>
            <a href="{{ route('bukus.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
