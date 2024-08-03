<!-- resources/views/raks/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Rak</h1>
    <a href="{{ route('raks.create') }}" class="btn btn-primary mb-2">Tambah Rak</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Rak</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($raks as $rak)
            <tr>
                <td>{{ $rak->kd_rak }}</td>
                <td>{{ $rak->lokasi }}</td>
                <td>
                    <a href="{{ route('raks.show', $rak->kd_rak) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('raks.edit', $rak->kd_rak) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('raks.destroy', $rak->kd_rak) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus rak ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
