
@extends('index')

@section('modalContent')
<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <p>Confirm delete <span id="deleteProduct">bike</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="bike/1" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete bike"/>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>vaca</td>
                    <td>100</td>
                    <td><a href=""
                          data-toggle="modal"
                          data-target="#modalDelete">delete</a></td>
                    <td><a href="{{ url('bike/1/edit') }}">edit</a></td>
                    <td><a href="{{ url('bike/1') }}">show</a></td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="row">
        <a href="{{ url('bike/create') }}" class="btn btn-success">add Bike</a>
    </div>
@endsection