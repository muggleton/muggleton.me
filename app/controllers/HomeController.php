<?php

class HomeController extends BaseController 
{

	public function getIndex()
	{
		return View::make('pages.home.index', ['fixed_top' => true]);
	}

}
