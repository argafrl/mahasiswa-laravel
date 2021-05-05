@extends('layout/main')
    @section('title', 'Detail Mahasiswa')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">Detail Mahasiswa</h1>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $mahasiswa as $mhs )
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->email }}</td>
                            <td>{{ $mhs->jurusan }}</td>
                            <td>
                                <a href="/mahasiswa/{{ $mhs->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                                <form action="/mahasiswa/{{ $mhs->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection