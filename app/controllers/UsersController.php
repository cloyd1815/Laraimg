<?php

class UsersController extends Controller {
	public function show($id) {
		if ($id != 0) {
			$user = User::findOrFail($id);
			$uploads = $user->uploads;
		} else {
			$uploads = Upload::where('user_id', '=', '0')->get();
			return View::make('users.recent')->with(['uploads' => $uploads]);
		}

		return View::make('users.show')->with([
			'user' => $user,
			'uploads' => $uploads
			]);
	}
}
