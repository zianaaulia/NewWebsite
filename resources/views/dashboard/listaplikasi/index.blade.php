@extends('dashboard.layouts.master')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Aplikasi</h1>
    </div>
    <div class="table-responsive">
    <a href="/dashboard/listaplikasi/create" class="btn btn-primary mb-3">Tambah Data Baru</a>
    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellpadding="" width="100%">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Aplikasi</th>
            <th scope="col">Waktu Pengerjaan</th>
            <th scope="col">Harga</th>
            <th scope="col">Developer</th>
            <th scope="col">Fitur</th>
            <th scope="col">Opsi</th>
        </tr>
        </thead>
        <tbody style="vertical-align: middle">
            @foreach ($listaplikasi as $la)
            <tr>
                <td>{{ $la->id }}</td>
                <td>{{ $la->name }}</td>
                <td>{{ $la->mainday }}</td>
                <td>{{ $la->price }}</td>
                <td>{{ $la->developer }}</td>
                <td>{!! $la->feature !!}</td>
                <td style="width: 75px;">
                    <a href="/dashboard/listaplikasi/edit/{{ $la->id }}" class="badge btn-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/listaplikasi/delete/{{ $la->id }}"class="d-inline">
                        @method('get')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Anda yakin akan menghapus data ini?')">
                        <span data-feather="x-circle"></span>
                        </button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection