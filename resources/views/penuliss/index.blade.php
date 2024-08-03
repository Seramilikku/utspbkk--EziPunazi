<!-- resources/views/penulises/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penulis</h1>
    <a href="{{ route('penuliss.create') }}" class="btn btn-primary mb-2">Tambah Penulis</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Kode Penulis</th>
                <th scope="col">Nama Penulis</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penuliss as $penulis)
            <tr>
                <td>{{ $penulis->kd_penulis }}</td>
                <td>{{ $penulis->nama_penulis }}</td>
                <td>{{ $penulis->tempat_lahir }}</td>
                <td>{{ $penulis->tgl_lahir }}</td>
                <td>{{ $penulis->email }}</td>
                <td>
                    <a href="{{ route('penuliss.show', $penulis->kd_penulis) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('penuliss.edit', $penulis->kd_penulis) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('penuliss.destroy', $penulis->kd_penulis) }}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus penulis ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
