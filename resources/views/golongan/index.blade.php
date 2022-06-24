@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Daftar Golongan</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('golongan/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }} " class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return confirm('Apakah anda yakin menghapus data ini?');">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

 @endsection