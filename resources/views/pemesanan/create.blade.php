@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('pemesanan.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">id_jadwal</label>
                <select class="form-select" name="id_jadwal" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($jadwal as $jadwals)
                        <option value="{{ $jadwals->id }}"> {{ $jadwals->id }}</option>
                    @endforeach
                </select>
                <label for="inputPassword" class="col-sm-2 col-form-label">id_user</label>
                <select class="form-select" name="id_user" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($user as $us)
                        <option value="{{ $us->id }}"> {{ $us->id }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="nama_pembeli" class="form-label ">nama_pembeli</label>
                    <input type="text" class="form-control form-control-sm" name="nama_pembeli" id="nama_pembeli" />
                </div>
                <div class="mb-3">
                    <label for="alamat_pembeli" class="form-label ">alamat_pembeli</label>
                    <input type="text" class="form-control form-control-sm" name="alamat_pembeli" id="alamat_pembeli" />
                </div>
                <div class="mb-3">
                    <label for="email_pembeli" class="form-label ">email_pembeli</label>
                    <input type="text" class="form-control form-control-sm" name="email_pembeli" id="email_pembeli" />
                </div>
                <div class="mb-3">
                    <label for="no_telp_pembeli" class="form-label ">no_telp_pembeli</label>
                    <input type="text" class="form-control form-control-sm" name="no_telp_pembeli"
                        id="no_telp_pembeli" />
                </div>
                <div class="mb-3">
                    <label for="jumlah_tiket" class="form-label ">jumlah_tiket</label>
                    <input type="text" class="form-control form-control-sm" name="jumlah_tiket" id="jumlah_tiket" />
                </div>
                <div class="mb-3">
                    <label for="total_harga" class="form-label ">total_harga</label>
                    <input type="text" class="form-control form-control-sm" name="total_harga" id="total_harga" />
                </div>
            </div>
            <a href="{{ route('pemesanan') }}">
                <button type="submit" class="btn btn-primary">Input</button>
        </form>
    </div>
@endsection
