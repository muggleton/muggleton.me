<?php
class Message extends Eloquent
{
	protected $table = 'messages';
	protected $guarded = ['id', 'read'];

	private $errors;
	private  $rules = [
	'name' => 'required|min:2',
	'email' => 'required|email',
	'message' => 'required|min:20',
	];


	/** Validate function **/
	public function validate($data)
	{
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