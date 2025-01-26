@extends('layouts.potato')

@section('title', 'Welcome to Potato')

@section('content')
<div class="d-flex justify-content-center py-3 mb-4">
    <h2 class="text-align-center border-bottom border-secondary">
        Welcome to Potato!
    </h2>
</div>
<div class="d-flex flex-wrap justify-content-center py-3 mb-4">
    <a href="{{ route('login') }}" class="btn btn-outline-primary mb-4 py-auto" style="width: 110px;">Login</a>
    <div class="w-100"></div>
    <a href="{{ route('register') }}" class="btn btn-outline-primary mb-4 py-auto" style="width: 110px;">Sign Up</a>
</div>
@endsection
