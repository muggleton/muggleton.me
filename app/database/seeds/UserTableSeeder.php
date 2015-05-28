<?php
class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		User::create(['username' => 'david', 'email' => 'david@muggleton.me', 'password' => Hash::make('hello')]);
	}

}