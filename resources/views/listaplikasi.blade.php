@extends('layouts/base')

@section('container')
<div class="container mt-4">
        <center>
            <h1>List Aplikasi</h1>
        </center>
        <hr>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            @foreach($listaplikasi->skip(0) as $la)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2>{{ $la->name }}</h2>
                <h4 class="card-text">{{ $la->price}}</h4>
                <article class="my-3">
                    <h4>Fitur   :</h4>
                    {!! $la->feature !!}
                </article>
                <h4 class="card-text">{{ $la->developer}}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection