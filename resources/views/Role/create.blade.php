@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('Role.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama_rule" class="form-label">Nama Role</label>
                <input type="text" name="nama_rule" class="form-control form-control-sm" id="nama_rule">
            </div>
            <button class="btn btn-primary mt-2" type="submit">Input</button>
        </form>
    </div>
@endsection
