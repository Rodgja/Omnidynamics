<?php

use Acme\Forms\LoginForm;
class SessionsController extends \BaseController {

	protected $loginform;
	
	function __construct(LoginForm $loginForm){
		$this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /sessions/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->loginForm->validate(Input::only('email','password'));
		$input = Input::only('email', 'password');
		if(Auth::attempt($input)){
			return Redirect::intended('/');
		}
		return Redirect::back()->withInput()->withFlashMessage('Invalid credentials');
	}

	/**
	 * Display the specified resource.
	 * GET /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();
		
		return Redirect::home();
	}

}