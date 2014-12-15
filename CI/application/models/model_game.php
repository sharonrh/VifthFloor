<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_game extends CI_Model
{

	function addNew()
	{
		$title = $this->input->post('title');
		$date = date("Y/m/d");
		$desc = $this->input->post('desc');
		$avail = $this->input->post('avail');
		$data = array(
			'Title' => $title,
			'Description' => $desc,
			'ReleaseDate' => $date,
			'AvailableOn' => $avail,
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
					$data[]=$row;
					$data['IdGame']=$game['Id'];
					$data = array(
						'IdGame' => $data['IdGame']
						);

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
			echo $slug;
			$query = $this->db->get_where('gamesImage',array('IdGame' => $slug));
			return $query->result();
		}
	
	function update($slug)
	{
		echo $slug;
		$title = $this->input->post('title');
		$date = date("Y/m/d");
		$desc = $this->input->post('desc');
		$avail = $this->input->post('avail');
		$data = array(
			'Title' => $title,
			'Description' => $desc,
			'ReleaseDate' => $date,
			'AvailableOn' => $avail,
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
		$take = $this->db->get('games', $per_page, $page_id);

		return $take->result();
	}
}
?>