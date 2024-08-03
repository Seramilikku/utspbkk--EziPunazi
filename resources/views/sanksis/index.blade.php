<!-- resources/views/sanksis/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Sanksi</h1>
    <a href="{{ route('sanksis.create') }}" class="btn btn-primary mb-2">Tambah Sanksi</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Sanksi</th>
                <th scope="col">ID Anggota</th>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">Jumlah Denda</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sanksis as $sanksi)
            <tr>
                <td>{{ $sanksi->id_sanksi }}</td>
                <td>{{ $sanksi->id_anggota }}</td>
                <td>{{ $sanksi->id_peminjaman }}</td>
                <td>{{ $sanksi->jumlah_denda }}</td>
                <td>{{ $sanksi->status }}</td>
                <td>
                    <a href="{{ route('sanksis.show', $sanksi->id_sanksi) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('sanksis.edit', $sanksi->id_sanksi) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('sanksis.destroy', $sanksi->id_sanksi) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus sanksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
