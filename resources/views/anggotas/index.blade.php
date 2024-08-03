<!-- resources/views/anggotas/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Anggota</h1>
    <a href="{{ route('anggotas.create') }}" class="btn btn-primary mb-2">Tambah Anggota</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">Nama</th>
                <th scope="col">No HP</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anggotas as $anggota)
            <tr>
                <td>{{ $anggota->id_peminjaman }}</td>
                <td>{{ $anggota->nama }}</td>
                <td>{{ $anggota->no_hp }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->email }}</td>
                <td>
                    <a href="{{ route('anggotas.show', $anggota->id_peminjaman) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('anggotas.edit', $anggota->id_peminjaman) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('anggotas.destroy', $anggota->id_peminjaman) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
