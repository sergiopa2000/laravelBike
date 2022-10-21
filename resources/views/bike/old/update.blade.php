@extends('index')

@section('content')
    <p>id: {{ $bike->id }}</p>
    <p>name: {{ $bike->name }}</p>
    <h1>EDITADO</h1>
    <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
@endsection