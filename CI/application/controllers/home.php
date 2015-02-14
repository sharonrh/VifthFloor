<?php
class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_home');
	}

	public function _home()
	{
		parent::_home();
	}

	function index()
	{
		$data['news']=$this->model_home->takeNews();
		//$data['slides']=$this->model_home->takeSlide();
		$this->load->view('home',$data);
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