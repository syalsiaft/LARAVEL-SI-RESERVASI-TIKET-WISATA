@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('transportasi.create') }}" class="btn btn-success ">+ Tambah Data</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data Transportasi</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <br />
            <tr class="text-center">
                <th scope="col">Id</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama Transportasi</th>
                <th scope="col">Jenis Transportasi</th>
                <th scope="col">Kelas</th>
                <th scope="col">Jumlah Kursi</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($transportasi as $tr)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $tr->kode }}</td>
                    <td>{{ $tr->nama_transportasi }}</td>
                    <td>{{ $tr->jenis_transportasi }}</td>
                    <td>{{ $tr->kelas }}</td>
                    <td>{{ $tr->jumlah_kursi }}</td>
                    <td>
                        <a href="{{ route('transportasi.destroy', ['id' => $tr->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('transportasi.edit', ['id' => $tr->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                    </td>
            @endforeach
        </tbody>
    </table>
@endsection
