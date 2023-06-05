@extends('admin.layout')
@section('content')
    <div class="container">
        <form action="{{ route('penumpang.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">id_pemesanan</label>
                <select class="form-select" name="id_pemesanan" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($pemesanan as $pm)
                        <option value="{{ $pm->id }}"> {{ $pm->id }}</option>
                    @endforeach
                </select>
                <div class="mb-3">
                    <label for="nama_penumpang" class="form-label ">nama_penumpang</label>
                    <input type="text" class="form-control form-control-sm" name="nama_penumpang" id="nama_penumpang" />
                </div>
                <div class="mb-3">
                    <label for="no_seat" class="form-label ">no_seat</label>
                    <input type="text" class="form-control form-control-sm" name="no_seat" id="no_seat" />
                </div>
            </div>
            <a href="{{ route('penumpang') }}">
                <button type="submit" class="btn btn-primary">Input</button>
        </form>
    </div>
@endsection
