<?php

use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProfilesController extends \BaseController {

	/**
	 * Display the specified resource.
	 * GET /profiles/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		try{
			$user = User::with('profile')->whereUsername($username)->firstOrFail(); 
		}
		catch(ModelNotFoundException $e){
		
			return Redirect::home();
		}
		return View::make('profiles.show')->withUser($user);
	}
	
	public function edit($username)
	{
		echo 'edit';
	}
}