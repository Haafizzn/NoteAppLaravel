@extends('layouts.app')
@section('content')

    <body>

        <form action="{{url('/note')}}" method="POST">
            @csrf
            <div class="border border-dark-300 shadow p-3 mb-5 bg-body-tertiary rounded">

                <!-----KOLOM JUDUL----->

                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">
                        Judul
                    </label>

                    <div class="col sm-2">
                        <input type="text" class="form-control" name="judul" id="judul" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="judul" class="col-sm-2 col-form-label">
                        Deskripsi
                    </label>
                    <div class="col sm-2">
                        <input type="text" class="form-control" name="deskripsi" id="deskripsi" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
            </div>
        </form>
        <table class="table table-striped">
            <tbody>

                @foreach ($post -> reverse() as $p)
                    
                <div class="card my-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$p -> judul}}</h5>
                        <p class="card-text">{{Illuminate\Support\Str::limit($p -> deskripsi ,350)}}</p>

                        <a class="btn btn-outline-success" href="{{url("note/$p->id/show")}}">Selengkapnya</a>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>

    </body>
@endsection
