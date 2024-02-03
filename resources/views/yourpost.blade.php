@extends('layouts.dashboard')
@section('container')
    <h1 class="text-center text-white text-3xl">Hello {{ Auth::user()['name'] }}, This is Your Post</h1>
@endsection