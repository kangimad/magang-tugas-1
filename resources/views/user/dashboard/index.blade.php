@extends('partials.user-layout')
@section('content')
    <div class="px-48 w-screen">
        DASHBOARD

        <p>
            Welcome back, {{ auth()->user()->username }}
        </p>
    </div>
@endsection
