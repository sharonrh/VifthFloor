<?php
class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('model_login');
		$this->load->model('model_home');
	}

	function index()
	{
		$loggedIn = $this->model_login->isLogin();
		
		if($loggedIn)
		{
			$this->load->view('admin/dashboard');
		}
		else
		{
			redirect('/login/index');
		}
	}

	function donasi()
	{
		$loggedIn = $this->model_login->isLogin();
		
		if($loggedIn)
		{
			$this->load->view('admin/donasi');
		}
		else
		{
			redirect('/login/index');
		}
	}

	function addSlider()
	{
		$loggedIn = $this->model_login->isLogin();
		
		if($loggedIn)
		{
			$sliders=$this->model_home->takeSlide();

			$this->load->view('admin/change-slider');
		}
		else
		{
			redirect('/login/index');
		}
	}
}
?>