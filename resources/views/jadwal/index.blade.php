@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('jadwal.create') }}" class="btn btn-success">+ Tambah Data</a>
            <a href="{{ route('jadwal.export') }}" class="btn btn-warning"> Print</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data Jadwal</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <br />
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Id Transportasi</th>
                <th scope="col">Jam Berangkat</th>
                <th scope="col">Jam Sampai</th>
                <th scope="col">Harga</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($jadwal as $jadwal)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $jadwal->id }}</td>
                    <td> {{ $jadwal->kota_asal }}</td>
                    <td> {{ $jadwal->kota_tujuan }}</td>
                    <td>{{ $jadwal->id_transportasi }}</td>
                    <td>{{ $jadwal->jam_berangkat }}</td>
                    <td>{{ $jadwal->jam_sampai }}</td>
                    <td>{{ $jadwal->harga }}</td>
                    <td>
                        <a href="{{ route('jadwal.destroy', ['id' => $jadwal->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('jadwal.edit', ['id' => $jadwal->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
