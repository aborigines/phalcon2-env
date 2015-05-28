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
		$isAuth = $this->session->get('auth');

		if($isAuth)
		{
			$this->response->redirect('/');
		}
		
		// set setitle
		$this->tag->appendTitle('Login');

		if ($this->request->isPost() && $this->security->checkToken()) 
		{
			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');
			// dump($this->session->set('auth'));
			if ( $username == 'a' && $password == 'a') {
				$this->session->set('auth',true);
				$this->response->redirect('user');
			}
		}
	}

	public function logoutAction() {
		$this->session->destroy();
	}	

	public function registerAction() {}

	public function forgetPasswordAction() {}


}