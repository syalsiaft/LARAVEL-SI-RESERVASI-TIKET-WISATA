@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('Kota.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" name="kota" class="form-control form-control-sm" id="kota">
            </div>
            <button class="btn btn-primary mt-2" type="submit">Input</button>
        </form>
    </div>
@endsection
