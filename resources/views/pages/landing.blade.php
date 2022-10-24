@extends('base')

@section('content')
<div class="container mt-5">
    <div class="card mt-5">
        {{-- style="; --}}
    <div  class=" items-center justify-center text-center">
        <div class="card-body bg-primary">
            <h1  class="text-dark"><b>Welcome to Midterm CheapTalk</b></h1>
            @if (!Auth::check())
            <a href="{{url('/register')}}"
                class="btn btn-secondary">
            Get Started
            </a>
            @endif

        </div>
    </div>
</div>
</div>
<style>
    #welcome{
        margin-top: 50px;
    }
</style>
@endsection