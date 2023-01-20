@extends('layout')
@section('main')
    @include('components.loginform')
    <p>Don't have an account? <a href="/register">Register here</a></p>
    @if (session('message'))
    <div class="alert alert-failed">
        <p>{{ session('message') }}</p>
    </div>
    @endif
@endsection