@extends('layouts.app')


@section('main')
<div class="starter-template">
    <h1>All nonograms available</h1>

    @foreach ($nonograms as $nonogram)
        <p><a href="{{ $nonogram->path() }}"># {{ $nonogram->id }} {{ $nonogram->title }} ({{ $nonogram->rows }} x {{ $nonogram->cols }})</a></p>
    @endforeach
</div>

@endsection

