@extends('layouts.app')
@section('content')
    <div class="card my-4">
        <div class="card-body">
            <h5 class="card-title">{{ $post->judul }}</h5>
            <p class="card-text">{{ $post->deskripsi }}</p>

            <!---------------BUTTON--------------->
            <form action="{{ url("note/$post->id") }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-outline-danger">
                    Hapus
                </button>
                
                <a href="{{ url("note/$post->id/edit") }}" class="btn btn-outline-info">Edit</a>

                <a href="{{ url('note') }}" class="btn btn-outline-success">Kembali</a>
            </form>
            <!-----------------ENDBUTTON-------------->

        </div>
    </div>
@endsection


