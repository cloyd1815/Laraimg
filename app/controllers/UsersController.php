<?php

class UsersController extends Controller {
	public function show($id) {
		$user = User::findOrFail($id);
		$uploads = $user->uploads;

		return View::make('users.show')->with([
			'user' => $user,
			'uploads' => $uploads
			]);
	}
}
