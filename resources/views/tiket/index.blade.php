@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('tiket.create') }}" class="btn btn-success ">+ Tambah Data</a>
            <a href="{{ route('tiket.export') }}" class="btn btn-warning"> Print</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data Tiket</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Kota Asal</th>
                <th scope="col">Kota Tujuan</th>
                <th scope="col">Waktu Transaksi</th>
                <th scope="col">Status</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($tiket as $tk)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $tk->nama_pembeli }}</td>
                    <td>{{ $tk->kota_asal }}</td>
                    <td>{{ $tk->kota_tujuan }}</td>
                    <td>{{ $tk->waktu_transaksi }}</td>
                    <td>{{ $tk->status }}</td>
                    <td>
                        <a href="{{ route('tiket.destroy', ['id' => $tk->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('tiket.edit', ['id' => $tk->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
