@extends('admin.layout.base')
@section('Main-Content')
    <div class="main-content">
        <h1 class="page-header">Daftar Pengunjung</h1>
        <div class="table">
        <table class="table table-hover">
            <thead class="table-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Nama</th>
                <th scope="col">Asal</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($visitors as $visitor)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $visitor->created_at }}</td>
                <td>{{ $visitor->nama }}</td>
                <td>{{ $visitor->asal }}</td>
                <td>{{ $visitor->alamat }}</td>
                <td>{{ $visitor->jumlah }}</td>
                <td>{{ $visitor->keterangan }}</td>
                <td class="aksi"><form action="{{ url('admin/daftar') }}/{{ $visitor->id }}" method="post">@method('put')@csrf<button type="submit" class="btn btn-primary">Edit</button></form> <form action="{{ url('admin/daftar') }}/{{ $visitor->id }}" method="post">@method('delete')@csrf<button type="submit" class="btn btn-danger">Delete</button></form></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
@endsection