@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <form class="form-inline">
                    <div class="form-group mb-2">
                      <label for="staticEmail2" class="sr-only">Package Code</label>
                      <input type="text" class="form-control-plaintext" id="packageCode" value="">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">Retrive</button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
