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
            <strong>Congrats!</strong> You've Created new packate.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="card">
          <div class="card-header">Create packate</div>
          <form class='p-2' method="post" action="{{route('packages.store')}}">
            @csrf
            <div class="form-group">
              <label for="code">Package Code</label>
              <input type="text" class="form-control" id="code" name='code'>
            </div>
            <div class="form-group">
              <label for="customer">Customer Name</label>
              <input type="text" name='customer' class="form-control" id="customer">
            </div>
            <div class="form-group">
              <label for="phone">Customer Phone</label>
              <input type="text" class="form-control" id="phone" name='phone'>
            </div>
            <div class="form-group">
              <label for="desc">Description</label>
              <textarea class="form-control" id="desc" name='desc' rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <select class="custom-select" id='state' name='state'>
                <option value='0' selected>Open this select menu</option>
                @isset($states)
                  @foreach ($states as $key => $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                  @endforeach
                @endisset
              </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection
