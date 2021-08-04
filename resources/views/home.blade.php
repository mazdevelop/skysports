@extends('layouts.app')

@section('content')
<div class="container w-3/4 mx-auto">
    <div class="row justify-content-center shadow-lg rounded p-6">
        <div class="col-md-8">
            <div class="h-4/5 bg-white">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
