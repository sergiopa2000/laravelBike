@extends('app.base')

@section('content')
<div class="row">
    <a href="{{ url('bike') }}" class="btn btn-success">bikes</a>
    <a href="{{ url('persona') }}" class="btn btn-success">Personas</a>
</div>
@endsection