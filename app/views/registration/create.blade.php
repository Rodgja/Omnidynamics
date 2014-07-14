@extends('layout')

@section('content')

<h1> Register </h1>
{{ Form::open(['route'=> 'registration.store']) }}

	<!-- Username Field-->
	<div class="form-group">
		{{ Form::label('username','Username:') }}
		{{ Form::text('username',null,['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('username','<span class="error">:message</span>')}}
	</div>
	
	<!-- Email Field-->
	<div class="form-group">
		{{ Form::label('email','Email:') }}
		{{ Form::text('email',null,['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('email','<span class="error">:message</span>')}}
	</div>
	
	<!-- Password Field-->
	<div class="form-group">
		{{ Form::label('password','Password:') }}
		{{ Form::password('password',null,['class' => 'form-control', 'required' => 'required']) }}
		{{ $errors->first('password','<span class="error">:message</span>')}}
	</div>
	
	<!-- Password Confirmation Field-->
	<div class="form-group">
		{{ Form::label('password_confirmation','Confirm Password:') }}
		{{ Form::password('password_confirmation',null,['class' => 'form-control', 'required' => 'required']) }}
	</div>
	
	<!-- Create Account Field-->
	<div class="form-group">
		{{ Form::submit('Create Account',null,['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}
@stop