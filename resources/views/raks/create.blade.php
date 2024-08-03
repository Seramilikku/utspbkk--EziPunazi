<!-- resources/views/raks/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Rak Baru</h1>
    <form action="{{ route('raks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('raks.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
