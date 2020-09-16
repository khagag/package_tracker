@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
          @if(auth('admin')->check())
            <x-admin-side-bar/>
          @else
            {{-- add the client sidebar component --}}
          @endif
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Package State</div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      {{-- current state --}}
                      <dl class="row">
                        <dt class="col-sm-3">Package Code</dt>
                        <dd class="col-sm-9">{{$package->code}}</dd>

                        <dt class="col-sm-3">Package State</dt>
                        <dd class="col-sm-9">
                          <p>{{$package->state->name}}</p>
                        </dd>

                        <dt class="col-sm-3">package state description</dt>
                        <dd class="col-sm-9">{{$package->state->description}}</dd>

                        <dt class="col-sm-3 text-truncate">package description</dt>
                        <dd class="col-sm-9">{{$package->description}}</dd>
                      </dl>
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
