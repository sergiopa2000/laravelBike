@extends('index')

@section('content')
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped" id="bikeTable">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">name</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bikes as $bike)
                <tr>
                    <td>{{ $bike->id }}</td>
                    <td>{{ $bike->name }}</td>
                    <td><a href="#"
                          class="deleteRow"
                          data-name="{{ $bike->name }}"
                          data-url="{{ url('bike/' . $bike->id) }}">delete</a></td>
                    <td><a href="{{ url('bike/' . $bike->id . '/edit') }}">edit</a></td>
                    <td><a href="{{ url('bike/' . $bike->id) }}">show</a></td>
                </tr>
                 @endforeach
            </tbody>
        </table>
    </div>
      <div class="row">
        <a href="{{ url('bike/create') }}" class="btn btn-success">add Bike</a>
    </div>
    <form action="" method="post" id="deleteForm">
      @csrf
      @method('delete')
    </form>
@endsection

@section('scripts')
<script type="text/javascript" src="{{ url('assets/js/bikeIndex.js') }}"></script>
@endsection