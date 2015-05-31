<?php
class ProjectController extends BaseController
{
	// Protect all the routes apart from index and project
	public function __construct()
	{
		$this->beforeFilter('auth', ['except' => ['getIndex', 'getView']]);
	}

	public function getIndex()
	{
		$projects = Project::orderBy('completion', 'DESC')->get();
		return View::make('pages.projects.index', ['projects' => $projects]);
	}

	public function getView($project_name)
	{
		$project = Project::whereName($project_name)->with('screenshots')->with('technologies')->first();
		return View::make('pages.projects.project', ['project' => $project]);
	}

	public function getNew()
	{
		return View::make('pages.projects.new');
	}

	public function postNew()
	{
		// Create a new Project instance
		$project = new Project(Input::except('technology', 'screenshot'));


		// Check for errrors
		if(!$project->validate(Input::all()))
		{
			// Errors occured
			return Redirect::to('/projects/new')->withInput()->withErrors($project->errors());
		}

		// Validation passed save the new project
		$project->save();

		foreach(Input::get('screenshot') as $screenshot)
		{
			// Add filled inputs
			if($screenshot !== '')
			{
				$project->screenshots()->save(new ProjectScreenshot(['url' => $screenshot]));
			}
		}

		foreach(Input::get('technology') as $technology)
		{
			// Add filled inputs
			if($technology !== '')
			{
				$project->technologies()->save(new ProjectTechnology(['content' => $technology]));
			}
		}

		// Redirect to new project page
		return Redirect::to('/projects/' . Input::get('name'));

	}

	public function getEdit($project_name)
	{
		$project = Project::whereName($project_name)->with('screenshots')->with('technologies')->first();
		return View::make('pages.projects.edit', ['project' => $project]);
	}

	public function postEdit($project_name)
	{
		// Find project
		$project = Project::whereName($project_name)->first();


		// Check for errrors
		if(!$project->validate(Input::all(), true))
		{
			// Errors occured
			return Redirect::to('/projects/edit/' . $project_name)->withInput()->withErrors($project->errors());
		}


		// Validation passed save the updated project
		$project->update(Input::except('technology', 'screenshot'));

		// Delete any previous screenshots/technologies
		$project->screenshots()->delete();
		$project->technologies()->delete();

		// Save the new ones
		foreach(Input::get('screenshot') as $screenshot)
		{
			// Add filled inputs
			if($screenshot !== '')
			{
				$project->screenshots()->save(new ProjectScreenshot(['url' => $screenshot]));
			}
		}

		foreach(Input::get('technology') as $technology)
		{
			// Add filled inputs
			if($technology !== '')
			{
				$project->technologies()->save(new ProjectTechnology(['content' => $technology]));
			}
		}

		// Redirect to new project page
		return Redirect::to('/projects/' . Input::get('name'));

	}

	public function getDelete($project_name)
	{
		// Find the project
		$project = Project::whereName($project_name)->first();
		// Delete screenshots
		$project->screenshots()->delete();
		// Delete technologies
		$project->technologies()->delete();
		// Delete project
		$project->delete();
		// Redirect to Projects page
		return Redirect::to('/projects');
	}

}