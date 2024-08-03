<!-- resources/views/raks/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Rak</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $rak->lokasi }}</h5>
            <a href="{{ route('raks.edit', $rak->kd_rak) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('raks.destroy', $rak->kd_rak) }}" method="POST" style="display: inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus rak ini?')">Hapus</button>
            </form>
            <a href="{{ route('raks.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
