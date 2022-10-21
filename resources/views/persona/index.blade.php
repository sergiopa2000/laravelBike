@extends('index')

@section('content')
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="bikeTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">dni</th>
                    <th scope="col">name</th>
                    <th scope="col">apellidos</th>
                    <th scope="col">telefono</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($personas as $persona)
                <tr>
                    <td>{{ $persona->id }}</td>
                    <td>{{ $persona->dni }}</td>
                    <td>{{ $persona->nombre }}</td>
                    <td>{{ $persona->apellidos }}</td>
                    <td>{{ $persona->telefono }}</td>
                    <td><a href="#"
                          class="deleteRow"
                          data-name="{{ $persona->dni }}"
                          data-url="{{ url('persona/' . $persona->id) }}">delete</a></td>
                    <td><a href="{{ url('persona/' . $persona->id . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('persona/' . $persona->id) }}">show</a></td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
      <div class="row">
        <a href="{{ url('persona/create') }}" class="btn btn-success">add Bike</a>
    </div>
    <form action="" method="post" id="deleteForm">
      @csrf
      @method('delete')
    </form>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('assets/js/bikeIndex.js') }}"></script>
@endsection