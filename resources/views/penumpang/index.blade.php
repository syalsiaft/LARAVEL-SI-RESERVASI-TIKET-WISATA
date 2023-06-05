@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('penumpang.create') }}" class="btn btn-success">+ Tambah Data</a>
            <a href="{{ route('penumpang.export') }}" class="btn btn-warning"> Print</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data Penumpang</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Id Pemesanan</th>
                <th scope="col">Nama Penumpang</th>
                <th scope="col">No Seat</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($penumpang as $pm)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $pm->id_pemesanan }}</td>
                    <td>{{ $pm->nama_penumpang }}</td>
                    <td>{{ $pm->no_seat }}</td>
                    <td>
                        <a href="{{ route('penumpang.destroy', ['id' => $pm->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('pemesanan.edit', ['id' => $pm->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
