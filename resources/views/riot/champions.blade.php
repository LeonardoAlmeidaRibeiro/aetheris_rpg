@extends('layouts.app')

@section('content')
<div class="champions">
    <h1 class="title">Campeões</h1>
    <div class="champions-list">
        @foreach($champions as $champion)
            <div class="card-container">
                <h2>{{ $champion->name }}</h2>
                <img src="{{ $champion->image_url }}" alt="{{ $champion->name }}">
                <p>{{ $champion->description }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
