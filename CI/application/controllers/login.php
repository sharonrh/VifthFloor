<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('model_login');

	}

	public function login()
	{
		parent::Controller();
	}

	function index()
	{
		$loggedIn=$this->model_login->isLogin();
		
		if(!$loggedIn)
		{
			$msg="";
			$data['msg']=$msg;
			$this->load->helper('form');
			$this->load->view('viewLogin',$data);
		}
		else
		{
			redirect('/dashboard');
		}
		
	}

	function check()
	{
		$result=$this->model_login->process();

		if(!$result)
		{
			$msg='<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		}
		else
		{
			redirect('/dashboard/');
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
?>