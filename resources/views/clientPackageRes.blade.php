@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      {{-- current state --}}
                    </div>
                    <div class="col-sm-12">
                      {{-- pacakge state timeline --}}
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
