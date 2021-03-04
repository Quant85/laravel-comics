@extends('layouts.dashboard')

@section('content')
<h1>Questo è il pannello di controllo </h1>
<p>Quest'area è dedicata ad eventuali elaborazioni dati con rappresentazioni grafiche</p>
<img src="" alt="">

<div class="card">
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
@endsection

