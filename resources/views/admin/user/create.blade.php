@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control form-control-sm" name="nama" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control form-control-sm" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Password</label>
                <input type="text" class="form-control form-control-sm" name="password" id="email">
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No_Telp</label>
                <input type="text" class="form-control form-control-sm" name="no_telp" id="no_telp">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control form-control-sm" name="role" id="role">
            </div>
            <button type="submit" class="btn btn-primary m-3">Input</button>
        </form>
    </div>
@endsection
