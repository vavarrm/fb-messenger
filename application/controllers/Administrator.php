<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {
	public function index()
	{

		$this->smarty->display(__CLASS__.'/index.tpl');
	}
	
	public function shopNew()
	{
		$this->smarty->display(__CLASS__.'/shopNewFrom.tpl');
	}
	
	
}
