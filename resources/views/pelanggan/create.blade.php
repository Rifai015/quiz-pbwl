@extends('layouts.app')

@section('content')
<div class="container">

    <h3>Tambah Data Pelanggan</h3>
    <form action="{{ url('/pelanggan') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>No Pelanggan</label>
            <input type="text" class="form-control" name="pel_no">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" name="pel_nama">
        </div>
        <div class="mb-3">
            <label >Alamat</label>
            <input type="text" class="form-control" name="pel_alamat" >
      </div>
      <div class="mb-3">
            <label >Hp</label>
            <input type="text" class="form-control" name="pel_hp" >
      </div>
      <div class="mb-3">
            <label >Ktp</label>
            <input type="text" class="form-control" name="pel_ktp" >
      </div>
      <div class="mb-3">
            <label >Seri</label>
            <input type="text" class="form-control" name="pel_seri" >
      </div>
      <div class="mb-3">
            <label >Meteran</label>
            <input type="text" class="form-control" name="pel_meteran" >
      </div>
      <div class="mb-3">
            <label class="form-label">Aktif</label>
            <br>
            <input type="radio" name="pel_aktif" value = "Y">YA
            <input type="radio" name="pel_aktif" value = "N">TIDAK
      </div>
        <div class="mb-3">
            <input type="submit" value="SIMPAN">
        </div>
    </form>
</div>
@endsection