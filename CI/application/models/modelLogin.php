<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelLogin extends CI_Model
{
	function construct()
	{
		parent:: construct();
	}

	function process()
	{
		$name=$this->input->post('name');
		$pass=md5($this->input->post('password'));

		$this->db->where('Name',$name);
		$this->db->where('Password',$pass);
		$take=$this->db->get('user');

		if($take->num_rows==1)
		{
			$row=$take->row();
			$data=array(
				'name' => $row->Name,
				'id'=>$row->Id,
				'role'=>$row->Role,
				'valid'=>TRUE
				);
			$this->session->set_userdata($data);
			return TRUE;
		}

		else
		{
			return FALSE;
		}
	}

	function isLogin()
	{
		if($this->session->userdata('id'))
		{
			return TRUE;
		}

		else
		{
			return FALSE;
		}
		
	}
}
?>