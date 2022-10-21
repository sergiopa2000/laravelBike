@extends('index')

@section('content')
    <p>id: {{ $persona->id }}</p>
    <p>name: {{ $persona->dni }}</p>
    <p>name: {{ $persona->nombre }}</p>
    <p>name: {{ $persona->apellidos }}</p>
    <p>name: {{ $persona->telefono }}</p>
    <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
@endsection