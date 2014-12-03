<?php

class UpimgController extends Controller {

	public function index() {
		return View::make('upimg.index');
	}

	public function uploadImage() {
		if (Input::hasFile('file'))
		{
			$file = Input::file('file');
			$fileName = md5_file($file->getRealPath());
			$file->move('public/images/', $fileName.'.png');
			
			if (Auth::check()) {
				Upload::create(array(
					'user_id' => Auth::id(),
					'file_name' => $fileName,
					'visibility' => '0'
					));
			} else {
				Upload::create(array(
					'user_id' => '0',
					'file_name' => $fileName,
					'visibility' => '0'
					));
			}
			return Redirect::to('/'.$fileName);
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
