<?php

use core\Model;

class AppController extends Controller {

	protected $model;

	public function __construct( Model $model )
	{
		$this->model = $model;
	}

	protected function seenAll()
	{
		if($alert = $this->model->getAlert())
			
			$alert->seen(new Datetime);
	}

	protected function seenOne(Eloquent $model)
	{
		if($alert = $this->model->getAlert())
			
			$alert->seen($model->created_at);
	}
}