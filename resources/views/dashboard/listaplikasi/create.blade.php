@extends('dashboard.layouts.master')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Aplikasi</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/listaplikasi/store" class="mb-5" enctype="multipart/form-data">
            @csrf  
            <div class="mb-3">
                <label for="name" class="form-label">Nama Aplikasi</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mainday" class="form-label">Waktu Pengerjaan</label>
                <input class="form-control @error('mainday') is-invalid @enderror" type="text" id="mainday" name="mainday">
                @error('mainday')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="developer" class="form-label">Developer</label>
                <input type="text" class="form-control @error('developer') is-invalid @enderror" id="developer" name="developer" required value="{{ old('developer') }}">
                @error('developer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="feature" class="form-label">Fitur</label>
                <input id="feature" type="hidden" name="feature">
                <trix-editor input="feature"></trix-editor>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
@endsection
