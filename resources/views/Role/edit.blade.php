@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('Role.update', $data_role->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('Role.update', $data_role->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $data_role->id }}">
                <div class="mb-3">
                    <label for="nama_rule" class="form-label">Nama Role</label>
                    <input type="text" name="nama_rule" value="{{ $data_role->nama_rule }}"
                        class="form-control form-control-sm" id="nama_rule">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
