@extends('index')

@section('content')
    <form action="{{ url('persona/' . $persona->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="dni">DNI</label>
            <input id="dni" name="dni" type="text" required minlength="9" maxlength="10" value="{{ old('dni') . $persona->dni }}" class="form-control">
            
            <label for="nombre">Nombre</label>
            <input id="nombre" name="nombre" type="text" required minlength="3" maxlength="50" value="{{ old('nombre') . $persona->nombre }}" class="form-control">
        
            <label for="apellidos">Apellidos</label>
            <input id="apellidos" name="apellidos" type="text" required minlength="5" maxlength="50" value="{{ old('apellidos') . $persona->apellidos }}" class="form-control">
        
        
            <label for="telefono">Telefono</label>
            <input id="telefono" name="telefono" type="text" maxlength="15" value="{{ old('telefono') . $persona->telefono }}" class="form-control">
        </div>
        <input type="submit" value="Update" class="btn btn-primary"/>
        &nbsp;
        <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
    </form>
@endsection