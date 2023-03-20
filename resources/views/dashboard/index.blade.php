@extends('dashboard.layouts.master')

@section('container')
    <div class="container mt-4">
        <center>
            <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
            <img src="image/123.png" alt="" width="700px">
        </center>
        
    </div>
@endsection