<!-- resources/views/peminjamans/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peminjaman</h1>
    <a href="{{ route('peminjamans.create') }}" class="btn btn-primary mb-2">Tambah Peminjaman</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID Peminjaman</th>
                <th scope="col">No Buku</th>
                <th scope="col">ID Anggota</th>
                <th scope="col">Tanggal Peminjaman</th>
                <th scope="col">Tanggal Pengembalian</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peminjamans as $peminjaman)
            <tr>
                <td>{{ $peminjaman->id_peminjaman }}</td>
                <td>{{ $peminjaman->no_buku }}</td>
                <td>{{ $peminjaman->id_anggota }}</td>
                <td>{{ $peminjaman->tgl_peminjaman }}</td>
                <td>{{ $peminjaman->tgl_pengembalian }}</td>
                <td>{{ $peminjaman->status }}</td>
                <td>
                    <a href="{{ route('peminjamans.show', $peminjaman->id_peminjaman) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('peminjamans.edit', $peminjaman->id_peminjaman) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('peminjamans.destroy', $peminjaman->id_peminjaman) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus peminjaman ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
