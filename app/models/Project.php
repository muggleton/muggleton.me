<?php
class Project extends Eloquent
{
	protected $table = 'projects';
	protected $guarded = ['id'];

	private $errors;
	private  $rules = [
	'title' => 'required',
	'name' => 'required|alpha_dash|unique:projects,name',
	'url' => 'url',
	'about' => 'required',
	'logo_url' => 'required|url',
	'completion' => 'required',
	'colour' => 'required|size:6',
	];



	/** Relationships **/
	public function technologies()
	{
		return $this->hasMany('ProjectTechnology', 'project_id', 'id');
	}
	public function screenshots()
	{
		return $this->hasMany('ProjectScreenshot', 'project_id', 'id');
	}

	/** Validate function **/
	public function validate($data, $updating = false)
	{

		if(Input::has('screenshot'))
		{

			foreach(Input::get('screenshot') as $key => $value)
			{
				$rules['screenshot.' . $key] = 'url';
			}
		}

		if(Input::has('technology'))
		{

			foreach(Input::get('technology') as $key => $value)
			{
				$rules['technology.' . $key] = 'url';
			}
		}

		// Check if we are updating
		if($updating){ $this->rules['name'] = 'required|alpha_dash'; }

		// make a new validator object
		$validator = Validator::make($data, $this->rules);


		 // check for failure
		if ($validator->fails())
		{
            // set errors and return false
			$this->errors = $validator->errors();
			return false;
		}

        // validation pass
		return true;
	}

	public function errors()
	{
		return $this->errors;
	}
}