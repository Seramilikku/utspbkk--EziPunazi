<!-- resources/views/bukus/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Buku</h1>
    <a href="{{ route('bukus.create') }}" class="btn btn-primary mb-2">Tambah Buku</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No Buku</th>
                <th scope="col">Judul</th>
                <th scope="col">Edisi</th>
                <th scope="col">No Rak</th>
                <th scope="col">Tahun</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Penulis</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
            <tr>
                <td>{{ $buku->no_buku }}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->edisi }}</td>
                <td>{{ $buku->no_rak }}</td>
                <td>{{ $buku->tahun }}</td>
                <td>{{ $buku->penerbit }}</td>
                <td>{{ $buku->penulis->nama_penulis }}</td>
                <td>
                    <a href="{{ route('bukus.show', $buku->no_buku) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('bukus.edit', $buku->no_buku) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('bukus.destroy', $buku->no_buku) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
