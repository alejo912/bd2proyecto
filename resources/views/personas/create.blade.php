@extends('main')

@section('body')
    <div class="top-nav">
        <a href="{{url('/personas')}}">
            <button class="rounded-circle btn btn-danger h-100">
                <span class="oi oi-chevron-left"></span>
            </button>
        </a>
        <a href="/">
            <button class="rounded-circle btn btn-danger h-100">
                <span class="oi oi-home"></span>
            </button>
        </a>
    </div>

@endsection