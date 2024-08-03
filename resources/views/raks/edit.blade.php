<!-- resources/views/raks/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Rak</h1>
    <form action="{{ route('raks.update', $rak->kd_rak) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" class="form-control" id="lokasi" name="lokasi" value="{{ $rak->lokasi }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('raks.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
