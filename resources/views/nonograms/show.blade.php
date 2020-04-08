@extends('layouts.app')


@section('main')
<div class="starter-template">
    <h1>{{ $nonogram->title }}</h1>

    <script>
        let solution = {{ $nonogram->jsonSolution() }};
    </script>
</div>

<script src="/js/vendor/p5.js"></script>
<script src="/js/cell.js"></script>
<script src="/js/grid.js"></script>
<script src="/js/sketch.js"></script>
@endsection

