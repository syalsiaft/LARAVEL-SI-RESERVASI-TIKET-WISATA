@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('penumpang.update', $data_penumpang->id) }}" method="post">
            @csrf
            @method('PUT')
            <form action="{{ route('penumpang.update', $data_penumpang->id) }}" method="post">
                <input type="hidden" name="id" value="{{ $data_penumpang->id }}">
                <div class="mb-3">
                    <label for="nama_rule" class="form-label">Nama Role</label>
                    <input type="text" name="nama_rule" value="{{ $data_penumpang->nama_rule }}"
                        class="form-control form-control-sm" id="nama_rule">
                </div>
                <button class="btn btn-primary mt-2" type="submit">Input</button>
            </form>
    </div>
@endsection
