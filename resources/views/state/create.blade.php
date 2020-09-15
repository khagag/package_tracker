@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      {{-- admin sidebar --}}
      <div class="col-sm-4">
        <div class="card">
          <div class="card-header">Control
          </div>
          <div class="list-group">
            <a href="" class="list-group-item list-group-item-action">text</a>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Congrats!</strong> You've Created new state.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="card">
          <div class="card-header">Create state</div>
          <form class='p-2'>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control" id="desc" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
