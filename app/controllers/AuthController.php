<?php

class AuthController extends Controller {

	public function showLogin() {
		return View::make('auth.login');
	}

	public function login() {
		$rules = array(
			'username'    => 'required',
			'password' => 'required|alphaNum|min:3'
		);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$field = filter_var(Input::get('username'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
			$userdata = array(
				$field => Input::get('username'),
				'password' => Input::get('password')
				);

			if (Auth::attempt($userdata)) {

				return Redirect::intended('/');

			} else {

				// validation not successful, send back to form	
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
		$rules = array(
			'name' => 'required|min:3',
			'email' => 'required|unique:users',
			'username' => 'required|unique:users',
			'password' => 'required|alphaNum|min:3'
		);
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/signup')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			User::create(array(
			'name'     => Input::get('name'),
			'username' => Input::get('username'),
			'email'    => Input::get('email'),
			'password' => Hash::make(Input::get('password')),

		));
			return Redirect::to('/login');
	}
}

}