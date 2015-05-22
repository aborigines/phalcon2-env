<?php

use Phalcon\Mvc\View;
use Phalcon\Config;
use Phalcon\Ext\Mailer\Manager as Mailer;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	
    }

    public function sendmailAction()
    {
    	$config = $this->config->mail;
			
		$mailer = new Mailer($config->toArray());

		$message = $mailer->createMessage()
		        ->to($config->from->email, $config->from->name)
		        ->subject('Hello world!')
		        ->content('Hello world!');

		// Send message
		$send = $message->send();

		$send ? $msg="success" : $msg="failed";

		echo $msg;		
    }

    public function testAction()
    {
    	// ของพี่แจ๊คค 22/05/2015
    	// html raw output without layout
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

