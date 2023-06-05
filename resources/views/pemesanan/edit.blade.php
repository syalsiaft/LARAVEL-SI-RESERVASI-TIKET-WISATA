@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('pemesanan.update', $data_pemesanan->id) }}" method="post">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $data_pemesanan->id }}">
            <div class="mb-3">
                <label for="id_jadwal" class="form-label">Id Jadwal</label>
                <input type="text" name="id_jadwal" value="{{ $data_pemesanan->id_jadwal }}"
                    class="form-control form-control-sm" id="id_jadwal">
            </div>
            <div class="mb-3">
                <label for="id_user" class="form-label">Id User</label>
                <input type="text" name="id_user" value="{{ $data_pemesanan->id_user }}"
                    class="form-control form-control-sm" id="id_user">
            </div>
            <div class="mb-3">
                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" name="nama_pembeli" value="{{ $data_pemesanan->nama_pembeli }}"
                    class="form-control form-control-sm" id="nama_pembeli">
            </div>
            <div class="mb-3">
                <label for="alamat_pembeli" class="form-label">Alamat Pembeli</label>
                <input type="text" name="alamat_pembeli" value="{{ $data_pemesanan->alamat_pembeli }}"
                    class="form-control form-control-sm" id="alamat_pembeli">
            </div>
            <div class="mb-3">
                <label for="email_pembeli" class="form-label">Email Pembeli</label>
                <input type="text" name="email_pembeli" value="{{ $data_pemesanan->email_pembeli }}"
                    class="form-control form-control-sm" id="email_pembeli">
            </div>
            <div class="mb-3">
                <label for="no_telp_pembeli" class="form-label">No Telp Pembeli</label>
                <input type="text" name="no_telp_pembeli" value="{{ $data_pemesanan->no_telp_pembeli }}"
                    class="form-control form-control-sm" id="no_telp_pembeli">
            </div>
            <div class="mb-3">
                <label for="jumlah_tiket" class="form-label">Jumlah Tiket</label>
                <input type="text" name="jumlah_tiket" value="{{ $data_pemesanan->jumlah_tiket }}"
                    class="form-control form-control-sm" id="jumlah_tiket">
            </div>
            <div class="mb-3">
                <label for="total_harga" class="form-label">Total Harga</label>
                <input type="text" name="total_harga" value="{{ $data_pemesanan->total_harga }}"
                    class="form-control form-control-sm" id="total_harga">
            </div>
            <button class="btn btn-primary mt-2" type="submit">Input</button>
        </form>
    </div>
@endsection
