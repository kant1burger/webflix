@extends('layouts.base')

@section('content')
<h2>A propos de notre équipe.</h2>


<ul>
    @foreach ($teams as $team)
    <li><a href="/a-propos/{{ $team }}"> {{ $team }} </a></li>
    @endforeach
</ul>

@endsection