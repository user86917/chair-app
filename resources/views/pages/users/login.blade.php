@extends('layout')
@section('main')

<div class="right_input bg-white" >
    {{-- bg-light --}}
    <h1>ChairFinder</h1>
    <hr style="width:50%;text-align:left;margin-left:0 bg-dark">

    @include('components.loginform')
    <p class="text-dark">Don't have an account? <a href="/register" class="text-dark">Register here</a></p>
    
    @if ($errors->any() || session()->has('message'))
    <div class="text-danger">
        <ul class="list-unstyled">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            <li>{{ session()->get('message') }}</li>
        </ul>
    </div>
    @endif
</div>
<div class="left-img bg-primary"></div>
@endsection