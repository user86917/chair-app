@extends('layout')
@section('main')
<div class="right_input bg-primary">

    <h1>ChairFinder</h1>
    <hr style="width:50%;text-align:left;margin-left:0 bg-dark">
    @include('components.registerform')
    <p class="text-dark">Already have an account? <a href="/login" class="text-dark">Login here</a></p>

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
</div>
<div class="left-img"></div>
@endsection