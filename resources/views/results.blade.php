@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Zoekresultaten voor "{{ request('query') }}"</h2>
                <hr>
                <ul class="list-group">
                    @forelse($results as $result)
                        <li class="list-group-item">
                            <h5>{{ $result->name }}</h5>
                            <p>{{ $result->description }}</p>
                        </li>
                    @empty
                        <li class="list-group-item">Geen resultaten gevonden. Probeer een andere zoekopdracht.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@endsection
