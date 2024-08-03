<!-- resources/views/penulises/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penulis</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $penulis->nama_penulis }}</h5>
            <p class="card-text">Tempat Lahir: {{ $penulis->tempat_lahir }}</p>
            <p class="card-text">Tanggal Lahir: {{ $penulis->tgl_lahir }}</p>
            <p class="card-text">Email: {{ $penulis->email }}</p>
            <a href="{{ route('penuliss.edit', $penulis->kd_penulis) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('penuliss.destroy', $penulis->kd_penulis) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus penulis ini?')">Hapus</button>
            </form>
            <a href="{{ route('penuliss.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
