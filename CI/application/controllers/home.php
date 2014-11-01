<?php
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function _home()
	{
		parent::_home();
	}

	function index()
	{
		$this->load->view('home');
	}

	function profile() 
	{
		$this->load->view('profil');
	}

	function donasi() 
	{
		$this->load->view('donasi');
	}
}
?>