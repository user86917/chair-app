@extends('layout')
@section('main')
    @include('components.registerform')
    <p>Already have an account? <a href="/login">Login here</a></p>

    @if ($errors->any() || session()->has('message'))
    <div class="text-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <p>{{ session()->get('message') }}</p>
    </div>
    @endif
@endsection