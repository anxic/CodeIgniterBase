<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller
{

	public function index()
	{
        $this->viewVars['example'] = 'Example to define a variable to the view';
        $this->layout->addCss('welcome');

        /* SEO OPTIMIZE */
        $this->layout->setTitle('My Website - Welcome message');
        $this->layout->setMetaDescr('Meta description for the welcome page');

		$this->layout->view('welcome_message', $this->viewVars);
	}
}
