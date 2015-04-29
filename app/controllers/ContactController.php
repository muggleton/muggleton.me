<?php
class ContactController extends BaseController
{
	public function getIndex()
	{
		return View::make('pages.contact.index');
	}
}