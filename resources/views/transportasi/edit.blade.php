@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('transportasi.update', $data_transportasi->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('transportasi.update', $data_transportasi->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $data_transportasi->id }}">
                <div class="mb-3">
                    <label for="kode" class="form-label">Kode</label>
                    <input type="text" name="kode" value="{{ $data_transportasi->kode }}"
                        class="form-control form-control-sm" id="kode">
                </div>
                <div class="mb-3">
                    <label for="nama_transportasi" class="form-label">Nama Transportasi</label>
                    <input type="text" name="nama_transportasi" value="{{ $data_transportasi->nama_transportasi }}"
                        class="form-control form-control-sm" id="nama_transportasi">
                </div>
                <div class="mb-3">
                    <label for="jenis_transportasi" class="form-label">Jenis Transportasi</label>
                    <select class="form-select" aria-label="Default select example" name="jenis_transportasi">
                        <option selected>Open this select menu</option>
                        <option {{ $data_transportasi->jenis_transportasi == 'Pesawat' ? 'selected' : '' }}>Pesawat</option>
                        <option {{ $data_transportasi->jenis_transportasi == 'Kereta Api' ? 'selected' : '' }}>Kereta Api
                        </option>
                        <option {{ $data_transportasi->jenis_transportasi == 'Kapal' ? 'selected' : '' }}>Kapal</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" value="{{ $data_transportasi->kelas }}"
                        class="form-control form-control-sm" id="kelas">
                </div>
                <div class="mb-3">
                    <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                    <input type="text" name="jumlah_kursi" value="{{ $data_transportasi->jumlah_kursi }}"
                        class="form-control form-control-sm" id="jumlah_kursi">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
