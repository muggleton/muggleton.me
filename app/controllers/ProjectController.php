<?php
class ProjectController extends BaseController
{
	public function getIndex()
	{
		return View::make('pages.projects.index');
	}

	public function getView()
	{
		return View::make('pages.projects.project');
	}
}