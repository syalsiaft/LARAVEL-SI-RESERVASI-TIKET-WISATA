@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('tiket.update', $data_tiket->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('tiket.update', $data_tiket->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $data_tiket->id }}">
                <div class="mb-3">
                    <label for="nama_pembeli" class="form-label">Nama Pembeli</label>
                    <input type="text" name="nama_pembeli" value="{{ $data_tiket->nama_pembeli }}"
                        class="form-control form-control-sm" id="nama_pembeli">
                </div>
                <div class="mb-3">
                    <label for="kota_asal" class="form-label">Kota Asal</label>
                    <input type="text" name="kota_asal" value="{{ $data_tiket->kota_asal }}"
                        class="form-control form-control-sm" id="kota_asal">
                </div>
                <div class="mb-3">
                    <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                    <input type="text" name="kota_tujuan" value="{{ $data_tiket->kota_tujuan }}"
                        class="form-control form-control-sm" id="kota_tujuan">
                </div>
                <div class="mb-3">
                    <label for="waktu_transaksi" class="form-label">Waktu Transaksi</label>
                    <input type="text" name="waktu_transaksi" value="{{ $data_tiket->waktu_transaksi }}"
                        class="form-control form-control-sm" id="waktu_transaksi">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" name="status" value="{{ $data_tiket->status }}"
                        class="form-control form-control-sm" id="status">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
