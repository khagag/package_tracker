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
            <a href="{{route('packages.create')}}" class="list-group-item list-group-item-action">Create Package</a>
          </div>
          <div class="list-group">
            <a href="{{route('states.create')}}" class="list-group-item list-group-item-action">Create State</a>
          </div>
          <div class="list-group">
            <a href="{{route('getPackage')}}" class="list-group-item list-group-item-action">update package state</a>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        @if(Session::has('state'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Congrats!</strong> You've updated package state.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <div class="card">
          <div class="card-header">update packate state</div>
          <form class='p-2' method="post" action="{{route('updateState')}}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="state">Package</label>
              <select class="custom-select" id='Package' name='package'>
                <option value='0' selected>Open this package menu</option>
                @isset($packages)
                  @foreach ($packages as $key => $value)
                    <option value="{{$value->id}}">{{$value->code}}</option>
                  @endforeach
                @endisset
              </select>
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
