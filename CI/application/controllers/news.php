<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('modelNews');
		$this->load->model('modelLogin');
		$this->load->library('image_CRUD');
	}

	public function news()
	{
		parent::Controller();
	}

	function index($id=NULL)
	{
		$total_rows = $this->db->get('news');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('text');

		$config['base_url']=base_url()."index.php/news/index";
		$config['total_rows']=$total_rows->num_rows();
		$config['per_page']='1';
		$config['first_page']='First';
		$config['last_page']='Last';
		$config['next_page']='&laquo;';
		$config['prev_page']='&laquo;';

		$this->pagination->initialize($config);
		$data['page']=$this->pagination->create_links();

		$data['records']=$this->modelNews->takeSome($config['per_page'],$id);

		$this->load->view('viewNews', $data);
	}

	function view($slug)
	{
		$data['news']=$this->modelNews->takeNews($slug);
		$data['title']=$data['news']['Title'];
		$data['content']=$data['news']['Content'];
		$this->load->view('readNews',$data);
	}

	function addNew()
	{
		$result=$this->modelLogin->isLogin();

		$data=array();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->modelNews->addNew();
				$this->load->helper('url');
				redirect('/news/index');
			}

			$this->load->helper('url');

			$data['category']=$this->modelNews->fillDropCategory();

			$this->load->view('addNews',$data);
		}

		else
		{
			$this->load->helper('url');
			redirect('/login/index');
		}
	}

	function update($slug)
	{
		$result=$this->modelLogin->isLogin();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->modelNews->update($slug);
				$this->load->helper('url');
				redirect('/news/index');
			}
			
			$data['news']=$this->modelNews->select($slug);
			$data['category']=$this->modelNews->fillDropCategory();
			$this->load->view('updateNews',$data);
		}
		
		else
		{
			$this->load->helper('url');
			redirect('/login/index');
		}
	}
}
?>