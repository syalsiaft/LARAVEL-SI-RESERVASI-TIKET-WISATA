@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('jadwal.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="kota_asal" class="form-label">Kota Asal</label>
                <div class="form-group">
                    <select class="form-control" name="kota_asal">
                        <option selected>Pilih Kota Asal</option>
                        @foreach ($kota as $row)
                            <option value="{{ $row->id }}"> {{ $row->kota }}</option>
                        @endforeach
                    </select>
                </div>
                {{-- <input type="text" class="form-control form-control-sm" name="kota_asal" id="kota_asal"> --}}
            </div>
            <div class="mb-3">
                <label for="kota_tujuan" class="form-label">Kota Tujuan</label>
                <div class="form-group">
                    <select class="form-control" name="kota_tujuan">
                        <option selected>Pilih Kota Tujuan</option>
                        @foreach ($kota as $row)
                            <option value="{{ $row->id }}"> {{ $row->kota }}</option>
                        @endforeach
                    </select>
                </div>
                <label for="id_transportasi" class="form-label">Id Transportasi</label>
                <select class="form-select" name="id_transportasi" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($transportasis as $tr)
                        <option value="{{ $tr->id }}"> {{ $tr->kode }}</option>
                    @endforeach
                </select>
                <div class="mb-2">
                    <label for="jam_berangkat" class="form-label m-1">Jam Berangkat</label>
                    <input type="datetime-local" class="form-control form-control-sm" name="jam_berangkat"
                        id="jam_berangkat">
                </div>
                <div class="mb-3">
                    <label for="jam_sampai" class="form-label m-2">Jam Sampai</label>
                    <input type="datetime-local" class="form-control form-control-sm" name="jam_sampai" id="jam_sampai">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label m-2">Harga</label>
                    <input type="text" class="form-control form-control-sm" name="harga" id="harga">
                </div>
                <button type="submit" class="btn btn-primary m-3">Input</button>

        </form>
    </div>
@endsection
