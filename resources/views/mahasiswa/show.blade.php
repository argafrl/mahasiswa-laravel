@extends('layout/main')
    @section('title', 'Show Detail Mahasiswa')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Show Detail Mahasiswa</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $mahasiswa->nama }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $mahasiswa->nim }}</h6>
                        <p class="card-text">{{ $mahasiswa->email }}</p>
                        <p class="card-text">{{ $mahasiswa->jurusan }}</p>
                        <a href="{{ $mahasiswa->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/" class="btn btn-link">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection