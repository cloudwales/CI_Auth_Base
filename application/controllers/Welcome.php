<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function index()
	{
		echo ENVIRONMENT; 
		// $this->load->view('template/header');
		// $this->load->view('main_page');
		// $this->load->view('template/footer');
	}
}
