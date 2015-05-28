<?php
class ContactController extends BaseController
{
	// Filters
	public function __construct()
	{
		$this->beforeFilter('auth', array('except' => ['getIndex', 'postIndex']));
	}

	public function getIndex($message = 0)
	{
		// Check if we are viewing a message
		if($message == 0)
		{
			// We aren't viewing a message
			// display an index of messages
			return View::make('pages.contact.index');
		}

		// Otherwise
		// dispay the message
		$message = Message::findOrDie($message);
		// Update as read
		$message->update(['read' => true]);
		// Display view
		return View::make('pages.contact.message');
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
		$messages = Message::select('name', 'email', 'created_at', 'read')->orderBy('read', 'DESC')->paginate(10);

		return View::make('pages.contact.messages', ['messages' => $messages]);

	}


}