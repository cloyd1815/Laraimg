<?php

class UpimgController extends Controller {

	public function index() {
		return View::make('upimg.index');
	}

	/**
	 * Process the image uploads
	 *
	 * @return redriects to file
	 */
	public function uploadImage() {
		//Check if a file is uploaded
		if (Input::hasFile('file')) {
			if (Ban::where('banned_ip', '=', Request::getClientIp())->get()) {
				$file = Input::file('file');
				$fileName = md5_file($file->getRealPath());
				//Check if the file is currently in the database
				if (Upload::where('file_name', '=', $fileName)->first()) {
					return Redirect::to('/'.$fileName);
				} else {
					$file->move('public/images/', $fileName . '.png');
				}
				//Check is the user is logged in, if so log the upload as their's
				if (Auth::check()) {
					Upload::create(array(
						'user_id' => Auth::id(),
						'file_name' => $fileName,
						'visibility' => '0',
						'uploader_ip' => Request::getClientIp()
						));
				} else {
					Upload::create(array(
						'user_id' => '0',
						'file_name' => $fileName,
						'visibility' => '0',
						'uploader_ip' => Request::getClientIp()
						));
				}
				return Redirect::to('/'.$fileName);
			} else {
				return Redirect::to('/')->with('message', "banimg! You have been banned for violating our TOS.");
			}
		} else {
			return Redirect::to('/')->with('message', "noimg! The file was too large or missing.");
		}
	}

	public function blog() {
		return View::make('upimg.blog');
	}

	public function imgView($img) {
		return View::make('upimg.imgView')->with('img', $img);
	}

	public function view() {
		return View::make('upimg.view');
	}
}
