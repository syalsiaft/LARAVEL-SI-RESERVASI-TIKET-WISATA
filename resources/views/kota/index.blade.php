@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <div><a href="{{ route('Kota.create') }}" class="btn btn-success">+ Tambah Data</a></div>
        </div>
    </div>
@endsection
@section('content')
    <h1>Data Kota</h1>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Kota</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($kota as $kota)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $kota->id }}</td>
                    <td>{{ $kota->kota }}</td>
                    <td>
                        <a href="{{ route('Kota.destroy', ['id' => $kota->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('Kota.edit', ['id' => $kota->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                        {{-- <a href="{{ route('Kota.destroy', ['id' => $kota->id]) }}">Delete</a> |
                        <a href="{{ route('Kota.edit', ['id' => $kota->id]) }}">Edit</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
