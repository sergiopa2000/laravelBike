@extends('index')

@section('content')
    <form action="{{ url('persona') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="dni">DNI</label>
            <input type="text" value="{{ old('dni') }}" required name="dni" id="dni" minlength="9" maxlength="10" class="form-control" placeholder="dni"/>
            
            <label for="nombre">Nombre</label>
            <input type="text" value="{{ old('nombre') }}" required name="nombre" id="nombre" minlength="3" maxlength="30" class="form-control" placeholder="Nombre"/>
            
            <label for="apellidos">Apellidos</label>
            <input type="text" value="{{ old('apellidos') }}" required name="apellidos" id="apellidos" minlength="3" maxlength="80" class="form-control" placeholder="Apellidos"/>
            
            <label for="telefono">Apellidos</label>
            <input type="text" value="{{ old('telefono') }}" name="telefono" id="telefono" maxlength="15" class="form-control" placeholder="Telefono"/>
        </div>
        <input type="submit" value="Add" class="btn btn-primary"/>
        &nbsp;
        <a href="{{ url()->previous() }}" class="btn btn-primary">back</a>
    </form>

@endsection