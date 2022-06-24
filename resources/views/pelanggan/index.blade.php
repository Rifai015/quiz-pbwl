@extends('layouts.app')

@section('content')
<div class="container">
    <h3> Daftar Pelanggan</h3>
    <a class="btn btn-primary btn-sm float-end" href="{{ url('pelanggan/create') }}">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>NO</th>
            <th>NO PELANGGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>HP</th>
            <th>KTP</th>
            <th>SERI</th>
            <th>METERAN</th>
            <th>AKTIF</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_no }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->pel_aktif }}</td>
            <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }} " class="btn btn-warning btn-sm">Edit</a></td>
            <td>
                <form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
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