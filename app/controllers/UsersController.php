<?php

class UsersController extends Controller {

	public function show($id) {
		//Sets up for the anon page
		if ($id != 0) {
			$user = User::findOrFail($id);
			$uploads = $user->uploads;
		//found the user
		} else {
			$uploads = Upload::where('user_id', '=', '0')->get();
			return View::make('users.recent')->with(['uploads' => $uploads]);
		}
		//send the view the user and all of their uploads
		return View::make('users.show')->with([
			'user' => $user,
			'uploads' => $uploads
			]);
	}
}
