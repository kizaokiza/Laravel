@extends('layouts.master')

@section('content')
<div class = "centered">
    <a href="{{ route('home') }}">home</a>
    <h1>GREET{{$name === null ? 'you' : $name}}</h1>
</div>
@endsection