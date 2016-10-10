<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subjects extends CI_Controller {
	public function index()
	{
		// die('Subjects/index');
		//$this->load->view('welcome_message');
		// load template
		$this->template->load('admin', 'default', 'subjects/index');
	}

	public function add()
	{
		// load template
		$this->template->load('admin', 'default', 'subjects/add');
	}

	public function edit()
	{
		// load template
		$this->template->load('admin', 'default', 'subjects/edit');
	}

	public function delete()
	{
		// 
	}
}
