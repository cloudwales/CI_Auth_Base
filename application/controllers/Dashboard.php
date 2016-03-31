<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if (!$this->ion_auth->is_admin())
		{
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert">You must be an admin to view this page</div>');
			redirect('/');
		}
	
		echo 'Dashboard';
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */