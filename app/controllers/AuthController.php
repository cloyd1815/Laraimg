<?php

class AuthController extends Controller {

	public function showLogin() {
		return View::make('auth.login');
	}

	/**
	*login
	*
	*Handles the login sessions of users
	*
	*@return redirect to main page
	*/
	public function login() {
		//rules for the form
		$rules = array(
			'username'    => 'required',
			'password' => 'required|alphaNum|min:3'
		);
		//check the form
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			//check if the $field is username or email
			$field = filter_var(Input::get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
			$userdata = array(
				$field => Input::get('username'),
				'password' => Input::get('password')
				);

			if (Auth::attempt($userdata, true)) {

				return Redirect::intended('/');

			} else {

				//validation not successful, send back to form	
				return Redirect::to('/login');

			}

		}
	}

	public function logout() {
		Auth::logout();
		return Redirect::to('login');
	}

	public function showSignup() {
		return View::make('auth.signup');
	}

	public function signup() {
		//rules for the form
		$rules = array(
			'name' => 'required|min:3',
			'email' => 'required|unique:users',
			'username' => 'required|unique:users',
			'password' => 'required|alphaNum|min:3'
		);
		//check the form to the rules
		$validator = Validator::make(Input::all(), $rules);
		if ($validator->fails()) {
			return Redirect::to('/signup')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			//create the user from info from the form
			User::create(array(
			'name'     => Input::get('name'),
			'username' => Input::get('username'),
			'email'    => Input::get('email'),
			'password' => Hash::make(Input::get('password')),
		));
			// **note to self** pretty sure you're not suppose to use input::get('password')
			return Redirect::to('/login');
	}
}

}