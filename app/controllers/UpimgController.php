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
			$file->move('images', $fileName.'.png');
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

	public function imgRaw($img) {
		try {
			$file = File::get('images/' . $img . '.png');
		} catch (Exception $error) {
			// Send error
			return Redirect::to('/')->with('message', "noimg! The file was too large or missing.");
		}

		$response = Response::make($file, 200);
		echo("File is located at '".$file."'");
		//$response->header('Content-Type', mime_content_type($file));

		return $response;
	}

	public function view() {
		return View::make('upimg.view');
	}
}
