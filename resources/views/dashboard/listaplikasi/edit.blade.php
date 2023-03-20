@extends('dashboard.layouts.master')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data</h1>
    </div>
    <div class="col-lg-8">
        @foreach ($listaplikasi as $la)
        <form action="/dashboard/listaplikasi/update/{{ $la->id }}" method="post" class="mb-5" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="mb-3">
                <input type="hidden" name="id" value="{{ $la->id }}"
                <label for="name" class="form-label">Nama Aplikasi</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required value="{{ $la->name }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mainday" class="form-label">Waktu Pengerjaan</label>
                <input type="text" class="form-control @error('mainday') is-invalid @enderror" id="mainday" name="mainday" value="{{ $la->mainday }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Harga</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required value="{{ $la->price }}">
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="feature" class="form-label">Fitur</label>
                <input id="feature" type="hidden" name="feature" required value="{{ $la->feature }}">
                <trix-editor input="feature"></trix-editor>
            </div>
            <div class="mb-3">
                <label for="developer" class="form-label">Developer</label>
                <input type="text" class="form-control @error('developer') is-invalid @enderror" id="developer" name="developer" required value="{{ $la->developer }}">
                @error('developer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
        @endforeach
    </div>
@endsection
