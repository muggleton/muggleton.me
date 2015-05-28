<?php
class ProjectTechnology extends Eloquent
{
	protected $table = 'project_technologies';
	protected $guarded = ['id'];

	/** Relationships **/
	public function project()
	{
		return $this->hasOne('Project', 'project_id', 'id');
	}
	
}