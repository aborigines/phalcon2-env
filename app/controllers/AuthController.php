<?php
namespace App\Controllers;

class AuthController extends ControllerBase
{
    public function initialize()
    {
        parent::initialize();
    }

	public function loginAction()
	{
		// set setitle
		$this->tag->appendTitle('Login');

		if ($this->request->isPost()) 
		{
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			// dump($this->session->set('auth'));
			if ( $username == 'a' && $password == 'a') {
				$this->session->set('auth',true);
			} else {
				$this->session->set('auth',false);
				dump($this->session->get('auth'));
				exit();
			}
		}
	}

	public function logoutAction() {
		$this->session->destroy();
	}	

	public function registerAction() {}

	public function forgetPasswordAction() {}


}