<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_game');
		$this->load->model('model_login');
		$this->load->library('image_CRUD');
	}

	public function game()
	{
		parent::Controller();
	}

	function index($id=NULL)
	{
		$total_rows = $this->db->get('games');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper('text');

		$config['base_url']=base_url()."index.php/game/index";
		$config['total_rows']=$total_rows->num_rows();
		$config['per_page']='1';
		$config['first_page']='First';
		$config['last_page']='Last';
		$config['next_page']='&laquo;';
		$config['prev_page']='&laquo;';

		$this->pagination->initialize($config);
		$data['page']=$this->pagination->create_links();

		$data['records']=$this->model_game->takeSome($config['per_page'],$id);

		$this->load->view('viewGame', $data);
	}

	function view($slug)
	{
		$data['news']=$this->model_news->takeNews($slug);
		$data['title']=$data['news']['Title'];
		$data['content']=$data['news']['Content'];
		$this->load->view('readNews',$data);
	}

	function addNew()
	{
		$result=$this->modelLogin->isLogin();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_game->addNew();
				$this->load->helper('url');
				redirect('/game/index');
			}

			$image_crud = new image_CRUD();
			
			$image_crud->set_primary_key_field('Id');
			$image_crud->set_url_field('Location');
			$image_crud->set_table('gamesimage')
				->set_image_path('assets/uploads');
			$this->db->where('IdGame',0);
			$output = $image_crud->render();
			$output->data="Hellooooo";

			$this->load->view('addGame',$output);
		}

		else
		{
			$this->load->helper('url');
			redirect('/login/index');
		}
	}

	function update($slug)
	{
		$result=$this->model_login->isLogin();

		if($result)
		{
			$this->load->helper('form');

			if($this->input->post('submit'))
			{
				$this->model_game->update($slug);
				$this->load->helper('url');
				redirect('/news/index');
			}

			echo "string";

			$image_crud = new image_CRUD();
			
			$image_crud->set_primary_key_field('Id');
			$image_crud->set_url_field('Location');
			$image_crud->set_table('gamesimage')
				->set_image_path('assets/uploads');
			$this->db->where('IdGame',$slug);
			$output = $image_crud->render();

			$data=$this->model_game->select($slug);

			$this->load->view('updateGame',$output);
		}
		
		else
		{
			$this->load->helper('url');
			redirect('/login/index');
		}
	}
}
?>