<?php
class ContactController extends BaseController
{
	// Filters
	public function __construct()
	{
		$this->beforeFilter('auth', array('except' => ['getIndex', 'postIndex']));
	}

	public function getIndex()
	{
		return View::make('pages.contact.index');
	}

	public function postIndex()
	{
		$message = new Message(Input::all());

		// Check for errrors
		if(!$message->validate(Input::all()))
		{
			// Errors occured
			return Redirect::to('/contact')->withInput()->withErrors($message->errors());
		}

		// No errors occured...save message
		$message->save();

		// redirect to contact page with success
		return Redirect::to('/contact')->with(['success' => true]);
	}

	public function getMessages()
	{
		return 'Messages page here...';
	}


}