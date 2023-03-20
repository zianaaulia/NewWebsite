@extends('layouts/base')

@section('container')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>App Name    : {{ $listaplikasii->name }}</h2>
                <h4>Main Day    : {{ $listaplikasii->mainday}}</h4>
                <h4>Price   : {{ $listaplikasii->price}} </h4>
                <article class="my-3">
                    <h4>Fitur   :</h4>
                    {!! $listaplikasii->feature !!}
                </article>
                <h4>Developer Name  : {{ $listaplikasii->developer}}</h4>
                <br><br><br><br><br>
                <a href="/listaplikasi" class="btn btn-dark my-2">Kembali</a>
            </div>
        </div>
    </div>
@endsection