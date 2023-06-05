@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('transportasi.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control form-control-sm" name="kode" id="kode">
            </div>
            <div class="mb-3">
                <label for="nama_transportasi" class="form-label">Nama Transportasi</label>
                <input type="text" class="form-control form-control-sm" name="nama_transportasi" id="nama_transportasi">
            </div>
            <div class="mb-3">
                <label for="jenis_transportasi" class="form-label">Jenis Transportasi</label>
                <select class="form-select" name="jenis_transportasi" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    <option value="Pesawat">Pesawat</option>
                    <option value="Kereta Api">Kereta Api</option>
                    <option value="Kapal">Kapal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" class="form-control form-control-sm" name="kelas" id="kelas">
            </div>
            <div class="mb-3">
                <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                <input type="text" class="form-control form-control-sm" name="jumlah_kursi" id="jumlah_kursi">
            </div>
            <a href="{{ route('transportasi') }}">
                <button type="submit" class="btn btn-primary">Input</button>
        </form>
    </div>
@endsection
