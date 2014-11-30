<?php

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Colin Loyd',
			'username' => 'cloyd',
			'email'    => 'cloyd@upimg.me',
			'password' => Hash::make('changeme'),
		));
	}

}
