@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p class="text-muted">Vind wat u zoekt.</p>
            <form action="{{ route('search.results') }}" method="GET" class="mt-3">
                <div class="input-group mb-3">
                    <input type="text" name="query" class="form-control" placeholder="Voer uw zoekopdracht in...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Zoeken</button>
                    </div>
                </div>
            </form>
            <h2>Zoekresultaten voor "{{ $query }}"</h2>
            <hr>
            <ul class="list-group">
                @forelse($results as $result)
                <li class="list-group-item">
                    <h5>
                        <a href="{{ $result['url'] }}" target="_blank">{{ $result['title'] }}</a>
                    </h5>
                    <p>{{ $result['description'] }}</p>
                </li>
                @empty
                <li class="list-group-item">Geen resultaten gevonden. Probeer een andere zoekopdracht.</li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
