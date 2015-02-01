<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_game');
		$this->load->model('model_login');
		$this->load->library('image_CRUD');
		$this->load->helper('url');
		$this->load->library('upload');
	}

	public function game()
	{
		parent::Controller();
	}

	function index($id = NULL)
	{
		$total_rows = $this->db->get('games');
		$this->load->library('pagination');
		$this->load->helper('text');

		$config['base_url'] = base_url()."index.php/game/index";
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
		$data['slides'] = $this->model_game->takeSlide();
		$data['records'] = $this->model_game->takeSome($config['per_page'],$id);
		
		$this->load->view('game/index', $data);
	}

	function view($slug)
	{
		$data['games'] = $this->model_game->takeGame($slug);
		$data['title'] = $data['games']['Title'];
		$data['description'] = $data['games']['Description'];
		$data['header'] = $data['games']['Header'];
		$data['images']=$this->model_game->takeImage($slug);

		$this->load->view('game/viewGame',$data);
	}

	// ------------------
	// admin controllers
	// ------------------

	function dashboard($id = NULL) 
	{
		$loggedIn = $this->model_login->isLogin();

		if($loggedIn)
		{
			$total_rows = $this->db->get('games');
			$this->load->library('pagination');
			$this->load->helper('text');

			$config['base_url'] = base_url()."index.php/dashboard/game";
			$config['total_rows'] = $total_rows->num_rows();
			$config['per_page'] = '20';
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
			$data['slides'] = $this->model_game->takeSlide();
			$data['records'] = $this->model_game->takeSome($config['per_page'], $id);
			
			$this->load->view('game/dashboard',$data);
		}
		else
		{
			redirect('/login/index');
		}
	}

	function addNew()
	{
		$loggedIn = $this->model_login->isLogin();

		if($loggedIn)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_game->addNew();
				redirect('dashboard/game');
			}

			$image_crud = new image_CRUD();
			
			$image_crud->set_primary_key_field('Id');
			$image_crud->set_url_field('Location');
			$image_crud->set_table('gamesimage')
				->set_image_path('assets/uploads');
			$this->db->where('IdGame',0);
			$output = $image_crud->render();

			$this->load->view('game/addGame',$output);
		}
		else
		{
			redirect('/login/index');
		}
	}

	function update($slug)
	{	
		$loggedIn = $this->model_login->isLogin();

		if($loggedIn)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_game->update($_POST['id']);
				redirect('dashboard/game');
			}

			if (!strtoupper($_SERVER['REQUEST_METHOD']) == 'POST')
			{
				$this->session->set_userdata('gameId', $_POST['id']);
			}

			$data = $this->model_game->select($slug);

			$image_crud = new image_CRUD();
			$image_crud->set_primary_key_field('Id');
			$image_crud->set_url_field('Location');
			$image_crud->set_table('gamesimage')
				->set_relation_field('IdGame')
				->set_image_path('assets/uploads');

			$output = $image_crud->render();

			$output->data = $data;

			$this->load->view('game/updateGame',$output);
		}

		else
		{
			redirect('/login/index');
		}
	}

	function delete($id)
	{
		$loggedIn = $this->model_login->isLogin();

		if($loggedIn)
		{
			$this->model_game->delete($id);
			redirect($_SERVER['HTTP_REFERER']);  		
		}
		else
		{
			redirect('/login/index');
		}
	}
}
?>