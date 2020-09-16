@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <form method="post" class="form-inline  justify-content-center">
                    @csrf
                    <div class="form-group mb-2">
                      <label for="staticEmail2">Package Code </label>
                      <input type="text" class="form-control ml-2 mr-2" id="packageCode" name='search_value' value="">
                    </div>
                    <button type='submit' class="btn btn-primary">search</button>
                  </form>
                  <hr/>
                    <div class="list-group" id='resList'>
                      @isset($packages)
                        @foreach ($packages as $key => $value)
                          <a href="{{route("packages.show",['package'=>$value->id])}}" class="list-group-item">{{$value->code}}</a>
                        @endforeach
                      @else
                        <a href='#' class="list-group-item list-group-item-action">No. search resoulst yet</a>
                      @endisset
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
