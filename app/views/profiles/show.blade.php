@extends('layout')

@section('content')

<h1>{{ $user->username }}</h1>
@if(Auth::user()->id==$user->id)
{{ link_to_route('profiles.edit', 'Edit Your Profile', $user->username) }}
@endif
@stop