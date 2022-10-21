@extends('index')

@section('content')
    <form action="{{ url('bike/' . $bike->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Bike name</label>
            <input id="name" name="name" type="text" required minlength="3" maxlength="50" value="{{ old('name') . $bike->name }}" class="form-control">
        </div>
        <input type="submit" value="Update" class="btn btn-primary"/>
        &nbsp;
        <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
    </form>
@endsection