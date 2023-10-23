@extends('layouts.app')

@section('content')
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
{{--                <img src="/path/to/gilde-logo.png" alt="Gilde Search Logo" width="200" class="mb-4">--}}
                <h2>Welkom bij Gilde Search</h2>
                <p class="text-muted">Vind wat u zoekt.</p>
                <form action="{{ route('search.results') }}" method="GET" class="mt-3">
                    <div class="input-group mb-3">
                        <input type="text" name="query" class="form-control" placeholder="Voer uw zoekopdracht in...">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Zoeken</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
