<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_game extends CI_Model
{

	function addNew()
	{
		$title = $this->input->post('title');
		$date = date("Y/m/d");
		$desc = $this->input->post('desc');
		$avail = $this->input->post('avail');
		
		$config['upload_path'] = '././assets/uploads/gameThumbnail';
 		$config['allowed_types'] = 'gif|jpg|png';
	  	$config['max_size'] = '100000';
	    $config['max_width'] = '2000';
		$config['max_height'] = '2000';

	  	$this->load->library('upload', $config);

	  	$this->upload->initialize($config); 
		$this->upload->do_upload('thumbnail');
		$upload_data = $this->upload->data();
	  	$thumb=$upload_data['file_name'];

		$config['upload_path'] = '././assets/uploads/gameHeader';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '1024';
		$config['max_height'] = '768';

		$this->load->library('upload', $config);

		$this->upload->initialize($config); 
		$this->upload->do_upload('gambarBerita');
		$upload_data = $this->upload->data();
		$header=$upload_data['file_name'];

		$data = array(
			'Title' => $title,
			'Description' => $desc,
			'ReleaseDate' => $date,
			'AvailableOn' => $avail,
			'Thumbnail' => $thumb,
			'Header' => $header
			);

		$this->db->insert('games',$data);

		$game = $this->db->get_where('games',array('Title' => $title));
		$take = $this->db->get_where('gamesimage',array('IdGame' => 0));

		if($game->num_rows()>0)
		{
			if($take->num_rows()>0)
			{
				foreach ($take->result() as $row) 
				{
					
					$data['IdGame']=$game->result()[0]->Id;
					$data = array(
							'IdGame' => $data['IdGame']
							);
					$this->db->where('Id',$row->Id);
					$this->db->update('gamesImage',$data);
				}
			}
		}
	}

	function takeGame($slug = FALSE)
	{
		$take = $this->db->get('games');
		if($slug == FALSE){
			if($take->num_rows() > 0)
			{
				foreach ($take->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
		}

		else
		{
			$query = $this->db->get_where('games',array('Id' => $slug));
			return $query->row_array();
		}
	}
	
	function takeImage($slug)
		{
			$query = $this->db->get_where('gamesImage',array('IdGame' => $slug));
			return $query->result();
		}
	
	function update($slug)
	{
		
		$title = $this->input->post('title');
		$date = date("Y/m/d");
		$desc = $this->input->post('desc');
		$avail = $this->input->post('avail');

		$config['upload_path'] = '././assets/uploads/gameThumbnail';
 		$config['allowed_types'] = 'gif|jpg|png';
	  	$config['max_size'] = '100000';
	    $config['max_width'] = '2000';
		$config['max_height'] = '2000';

	  	$this->load->library('upload', $config);

	  	$this->upload->initialize($config); 
		$this->upload->do_upload('thumbnail');
		$upload_data = $this->upload->data();
	  	$thumb=$upload_data['file_name'];

		$config['upload_path'] = '././assets/uploads/gameHeader';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '10000';
		$config['max_width'] = '2000';
		$config['max_height'] = '2000';

		$this->load->library('upload', $config);

		$this->upload->initialize($config); 
		$this->upload->do_upload('gambarBerita');
		$upload_data = $this->upload->data();
		$header=$upload_data['file_name'];

		$data = array(
			'Title' => $title,
			'Description' => $desc,
			'ReleaseDate' => $date,
			'AvailableOn' => $avail,
			'Thumbnail' => $thumb,
			'Header' => $header
			);

		$this->db->where('Id',$slug);
		$this->db->update('games',$data);
	}

	function select($slug)
	{
		return $this->db->get_where('games',array('Id' => $slug))->row();
	}

	function takeSome($per_page, $page_id)
	{	
		$this->db->select('*')->from('games')->order_by("Title", "asc")->limit($per_page, $page_id); 
		$take = $this->db->get();

		return $take->result();
	}

	function takeSlide()
	{
		$query = $this->db->query("SELECT * FROM gamesImage;");

		return $query->result();
	}
}
?>