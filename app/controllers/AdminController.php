<?php
class AdminController extends BaseController
{
	public function __construct()
	{
		// Filters
		$this->afterFilter('guest', array('only' => ['getLogin', 'postLogin']));
		$this->beforeFilter('auth', array('except' => ['getLogin', 'postLogin']));
	}

	public function getLogin()
	{
		return View::make('pages.admin.login');
	}

	public function postLogin()
	{
		if (Auth::attempt(array('username' => Input::get('username'), 'password' => Input::get('password'))))
		{
			return Redirect::to('/');
		}

		// Authentication failed
		// redirect back to the login page

		return Redirect::to('/admin/login')->withErrors('login_error');
	}

	public function getLogout()
	{
		// Logout
		Auth::logout();
		// Redirect home
		return Redirect::to('/');
	}
}