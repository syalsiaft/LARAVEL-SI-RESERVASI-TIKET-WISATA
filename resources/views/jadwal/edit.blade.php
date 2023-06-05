@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('jadwal.update', $data_jadwal->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('jadwal.update', $data_jadwal->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $data_jadwal->id }}">
                <div class="mb-3">
                    <label for="kota_asal" class="form-label">Kota Asal</label>
                    <input type="text" name="kota_asal" value="{{ $data_jadwal->kota_asal }}"
                        class="form-control form-control-sm" id="kota_asal">
                </div>
                <div class="mb-3">
                    <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                    <input type="text" name="kota_tujuan" value="{{ $data_jadwal->kota_tujuan }}"
                        class="form-control form-control-sm" id="kota_tujuan">
                </div>
                <div class="mb-3">
                    <label for="id_transportasi" class="form-label">Id Transportasi</label>
                    <input type="text" name="id_transportasi" value="{{ $data_jadwal->id_transportasi }}"
                        class="form-control form-control-sm" id="id_transportasi">
                </div>
                <div class="mb-3">
                    <label for="jam_berangkat" class="form-label">Jam Berangkat</label>
                    <input type="text" name="jam_berangkat" value="{{ $data_jadwal->jam_berangkat }}"
                        class="form-control form-control-sm" id="jam_berangkat">
                </div>
                <div class="mb-3">
                    <label for="jam_sampai" class="form-label">Jam Sampai</label>
                    <input type="text" name="jam_sampai" value="{{ $data_jadwal->jam_sampai }}"
                        class="form-control form-control-sm" id="jam_sampai">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" name="harga" value="{{ $data_jadwal->harga }}"
                        class="form-control form-control-sm" id="harga">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
