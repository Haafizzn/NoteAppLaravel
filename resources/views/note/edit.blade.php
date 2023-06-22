@extends('layouts.app')
@section('content')

<form action="{{url("note/$post->id")}}" method="POST">
    @method('patch')
    @csrf
    <div class="border border-dark-300 shadow p-3 mb-5 bg-body-tertiary rounded">

        <!-----KOLOM JUDUL----->
        <h3>Edit Data</h3>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">
                Judul
            </label>

            <div class="col sm-2">
                <input type="text" class="form-control" name="judul" id="judul" value="{{$post->judul}}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">
                Deskripsi
            </label>
            <div class="col sm-2">
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" value="{{$post->deskripsi}}" required>
            </div>
        </div>
        <button type="submit" class="btn btn-outline-primary">Simpan</button>
    </div>
</form>
@endsection