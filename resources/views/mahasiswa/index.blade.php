@extends('layout/main')
    @section('title', 'Daftar Mahasiswa')

    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Mahasiswa</h1>         

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach( $mahasiswa as $mhs)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $mhs->nama }}
                        <a href="mahasiswa/{{ $mhs->id }}" class="btn btn-info btn-sm">Detail</a>
                    </li>
                    @endforeach
                </ul>
                <a href="/mahasiswa/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
                <!-- <table class="table">
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
                                <a href="" class="badge bg-success">Edit</a>
                                <a href="" class="badge bg-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    @endsection