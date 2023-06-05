@extends('admin.layout')
@section('tombol')
    <div class="card mx-3">
        <div class="card-body">
            <a href="{{ route('Role.create') }}" class="btn btn-success">+ Tambah Data</a>
            <a href="{{ route('Role.export') }}" class="btn btn-warning"> Print</a>
        </div>
    </div>
@endsection
@section('content')
    <h1>Data Role</h1>
    <table class="table table-success table-striped-columns">
        <thead>
            <tr class="text-center">
                <th scope="col">No</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($role as $rl)
                <tr class="text-center">
                    <td>{{ $no++ }}</td>
                    <td>{{ $rl->nama_rule }}</td>
                    <td>
                        <a href="{{ route('Role.destroy', ['id' => $rl->id]) }}">
                            <button type="button" class="btn btn-danger btn-sm"><i
                                    class="fas fa-trash-alt"></i></button></a>
                        <a href="{{ route('Role.edit', ['id' => $rl->id]) }}">
                            <button type="button" class="btn btn-primary btn-sm"><i
                                    class="fa-solid fa-pen"></i></button></a>
                        {{-- <a href="{{ route('Role.destroy', ['id' => $rl->id]) }}">Delete</a> |
                        <a href="{{ route('Role.edit', ['id' => $rl->id]) }}">Edit</a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
