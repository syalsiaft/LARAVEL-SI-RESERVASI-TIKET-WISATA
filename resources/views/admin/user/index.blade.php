@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('user.create') }}" class="btn btn-success">+ Tambah Data</a>
        </div>
    </div>
@endsection
@section('content')
    <h2>Data User</h2>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No Telp</th>
                <th scope="col">Role</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($user as $us)
                <tr class="text-center">
                    <td> {{ $no++ }}</td>
                    <td>{{ $us->id }}</td>
                    <td>{{ $us->nama }}</td>
                    <td>{{ $us->email }}</td>
                    <td>{{ $us->no_telp }}</td>
                    <td>{{ $us->role }}</td>
                    <td>
                        <a href="{{ route('user.destroy', ['id' => $us->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('user.edit', ['id' => $us->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
