@extends('index')

@section('content')
    <h1>VOY A CREAR</h1>
    <form action="{{ url('bike') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Bike name</label>
            <input type="text" value="{{ old('name') }}" required name="name" id="name" minlength="3" maxlength="50" class="form-control" placeholder="Bike name"/>
        </div>
        <input type="submit" value="Create" class="btn btn-primary"/>
        &nbsp;
        <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
    </form>

@endsection