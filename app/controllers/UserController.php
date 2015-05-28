<?php
namespace App\Controllers;

class UserController extends ControllerBase
{

	public function indexAction() 
	{
		$this->tag->appendTitle('User');
	}
}