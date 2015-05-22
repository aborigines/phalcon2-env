<?php

use Phalcon\Mvc\View;

use Phalcon\Mvc\View\Simple as SimpleView;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function testAction()
    {

		$view = $this->view;

		$content = $view->getRender('index', 'test',
		  [
		    "var1" => "some value 1",
		    "var2" => "some value 2"
		  ],
		  function($view) {
		      $view->setRenderLevel(\Phalcon\Mvc\View::LEVEL_LAYOUT);
		  }
		);

		echo $content;
    }

}

