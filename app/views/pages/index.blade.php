@extends('layout')

@section('content')

<h1> {{ Auth::check() ? "Welcome, ". Auth::user()->username : "Why Don't you sign up?" }}</h1>

@stop