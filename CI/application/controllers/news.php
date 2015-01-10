<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_news');
		$this->load->model('model_login');
		$this->load->library('image_CRUD');
		$this->load->helper('url');
	}

	public function news()
	{
		parent::Controller();
	}

	function index($id = NULL)
	{
		$total_rows = $this->db->get('news');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('text');

		$config['base_url'] = base_url()."index.php/news/index";
		$config['total_rows'] = $total_rows->num_rows();
		$config['per_page'] = '3';
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&laquo;';
		$config['num_tag_open'] = $config['prev_tag_open'] = $config['first_tag_open'] = "<li>";
		$config['next_tag_open'] = $config['last_tag_open'] = "<li>";
		$config['cur_tag_open'] = "<li><a href='#'>";
		$config['num_tag_close'] = $config['prev_tag_close'] = $config['first_tag_close'] = "</li>";
		$config['next_tag_close'] = $config['last_tag_close'] = "</li>";
		$config['cur_tag_close'] = "</a></li>";

		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();

		$data['records'] = $this->model_news->takeSome($config['per_page'],$id);

		$this->load->view('news', $data);
	}

	function view($slug)
	{
		$data['news'] = $this->model_news->takeNews($slug);
		$data['title'] = $data['news']['Title'];
		$data['content'] = $data['news']['Content'];
		$data['pubDate'] = $data['news']['PublishedDate'];
		$this->load->view('viewNews',$data);
	}

	function allNews($id=NULL)
	{
		$total_rows = $this->db->get('news');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('text');

		$config['base_url'] = base_url()."index.php/news/allNews";
		$config['total_rows'] = $total_rows->num_rows();
		$config['per_page'] = '3';
		$config['first_page'] = 'First';
		$config['last_page'] = 'Last';
		$config['next_page'] = '&laquo;';
		$config['prev_page'] = '&laquo;';
		$config['num_tag_open'] = $config['prev_tag_open'] = $config['first_tag_open'] = "<li>";
		$config['next_tag_open'] = $config['last_tag_open'] = "<li>";
		$config['cur_tag_open'] = "<li><a href='#'>";
		$config['num_tag_close'] = $config['prev_tag_close'] = $config['first_tag_close'] = "</li>";
		$config['next_tag_close'] = $config['last_tag_close'] = "</li>";
		$config['cur_tag_close'] = "</a></li>";

		$this->pagination->initialize($config);
		$data['page'] = $this->pagination->create_links();

		$data['records'] = $this->model_news->takeSome($config['per_page'],$id);

		$this->load->view('adminNews', $data);
	}

	function addNew()
	{
		$result = $this->model_login->isLogin();

		$data = array();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_news->addNew();
				$this->load->helper('url');
				redirect('/news/index');
			}

			$this->load->helper('url');

			$data['category']=$this->model_news->fillDropCategory();

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
		$result = $this->model_login->isLogin();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_news->update($slug);
				$this->load->helper('url');
				redirect('/news/index');
			}
			
			$data['news'] = $this->model_news->select($slug);
			$data['category'] = $this->model_news->fillDropCategory();
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