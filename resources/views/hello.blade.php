
@extends('layouts.base')  
  
@section('content')
<h1>Bonjour {{ $name }} </h1>

    <ul>
        @foreach ($numbers as $number)
        <li>{{ $number }}</li>
        @endforeach
    </ul>
@endsection
