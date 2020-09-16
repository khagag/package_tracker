@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      {{-- admin sidebar --}}
      <div class="col-sm-4">
        <x-admin-side-bar/>
      </div>
      <div class="col-sm-8">
        @if(Session::has('state'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Congrats!</strong> You've Created new state.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
        <div class="card">
          <div class="card-header">Create state</div>
          <form class='p-2' action="{{route('states.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name='name'>
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control" id="desc" rows="3" name='desc'></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
