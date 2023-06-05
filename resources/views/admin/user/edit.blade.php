@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('user.update', $us->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('user.update', $us->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $us->id }}">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" value="{{ $us->nama }}" class="form-control form-control-sm"
                        id="nama">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" value="{{ $us->email }}" class="form-control form-control-sm"
                        id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" name="password" value="{{ $us->password }}" class="form-control form-control-sm"
                        id="password">
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No_telp</label>
                    <input type="text" name="no_telp" value="{{ $us->no_telp }}" class="form-control form-control-sm"
                        id="no_telp">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Role</label>
                    <input type="text" name="role" value="{{ $us->role }}" class="form-control form-control-sm"
                        id="role">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
