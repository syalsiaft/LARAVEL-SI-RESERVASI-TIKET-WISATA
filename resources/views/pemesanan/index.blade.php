@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('pemesanan.create') }}" class="btn btn-success">+ Tambah Data</a>
            <a href="{{ route('pemesanan.export') }}" class="btn btn-warning"> Print</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data Pemesanan</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Id Jadwal</th>
                <th scope="col">Id User</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Alamat</th>
                <th scope="col">Email</th>
                <th scope="col">No Telp</th>
                <th scope="col">Jumlah Tiket</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($pemesanan as $pm)
                <tr class="text-center">
                    <td>{{ $pm->id }}</td>
                    <td>{{ $pm->id_jadwal }}</td>
                    <td>{{ $pm->id_user }}</td>
                    <td>{{ $pm->nama_pembeli }}</td>
                    <td>{{ $pm->alamat_pembeli }}</td>
                    <td>{{ $pm->email_pembeli }}</td>
                    <td>{{ $pm->no_telp_pembeli }}</td>
                    <td>{{ $pm->jumlah_tiket }}</td>
                    <td>{{ $pm->total_harga }}</td>
                    <td>
                        <a href="{{ route('pemesanan.destroy', ['id' => $pm->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('pemesanan.edit', ['id' => $pm->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                    </td>
            @endforeach
        </tbody>
    </table>
@endsection
