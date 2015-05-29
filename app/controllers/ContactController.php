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
		$messages = Message::select('id', 'name', 'email', 'created_at', 'read')->orderBy('read', 'ASC')->paginate(10);
		return View::make('pages.contact.messages', ['messages' => $messages]);
	}

	public function getMessage($id)
	{
		// Find the message
		$message = Message::findOrFail($id);
		// Update as read
		$message->read = true;
		// Save changed
		$message->save();

		// Display view
		return View::make('pages.contact.message', ['message' => $message]);
	}

}