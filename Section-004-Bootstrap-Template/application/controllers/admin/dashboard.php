<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		// die('Dashboard');
		// $this->load->view('admin/dashboard');
		// load template
		$this->template->load('admin', 'default', 'dashboard');
	}
}
