<!-- resources/views/sanksis/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Sanksi</h1>
    <form action="{{ route('sanksis.update', $sanksi->id_sanksi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_anggota">ID Anggota</label>
            <input type="number" class="form-control" id="id_anggota" name="id_anggota" value="{{ $sanksi->id_anggota }}" required>
        </div>
        <div class="form-group">
            <label for="id_peminjaman">ID Peminjaman</label>
            <input type="number" class="form-control" id="id_peminjaman" name="id_peminjaman" value="{{ $sanksi->id_peminjaman }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_denda">Jumlah Denda</label>
            <input type="number" class="form-control" id="jumlah_denda" name="jumlah_denda" value="{{ $sanksi->jumlah_denda }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="tunggakan" {{ $sanksi->status === 'tunggakan' ? 'selected' : '' }}>Tunggakan</option>
                <option value="lunas" {{ $sanksi->status === 'lunas' ? 'selected' : '' }}>Lunas</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('sanksis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
