@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('tiket.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                <input type="text" class="form-control form-control-sm" name="nama_pembeli" id="nama_pembeli">
            </div>
            <div class="mb-3">
                <label for="kota_asal" class="form-label">Kota Asal</label>
                <input type="text" class="form-control form-control-sm" name="kota_asal" id="kota_asal">
            </div>
            <div class="mb-3">
                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                <input type="text" class="form-control form-control-sm" name="kota_tujuan" id="kota_tujuan">
            </div>
            <div class="mb-3">
                <label for="waktu_transaksi" class="form-label">Waktu Transaksi</label>
                <input type="datetime-local" class="form-control form-control-sm" name="waktu_transaksi"
                    id="waktu_transaksi">
            </div>
            <label for="inputPassword" class="col-sm-2 col-form-label">Status</label>
            <select class="form-select" name="status" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="Lunas">Lunas</option>
                <option value="Kadaluwarsa">Kadaluwarsa</option>
                <option value="Dibatalkan">Dibatalkan</option>
            </select>
            <button type="submit" class="btn btn-primary mt-2">Input</button>
        </form>
    </div>
@endsection
