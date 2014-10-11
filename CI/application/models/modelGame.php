<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelGame extends CI_Model
{

	function addNew()
	{
		$title=$this->input->post('title');
		$date=$this->input->post('date');
		$desc=$this->input->post('desc');
		$avail=$this->input->post('avail');
		$data = array(
			'Title'=>$title,
			'Description'=>$desc,
			'ReleaseDate'=>$date,
			'AvailableOn'=>$avail,
			);
		$this->db->insert('games',$data);

		$game=$this->db->where('Title',$title);
		$game=$this->db->get('games');
		
		$take=$this->db->where('IdGame',0);
		$take=$this->db->get('gamesImage');
		

		if($game->num_rows()>0)
		{
			if($take->num_rows()>0)
			{
				foreach ($game -> result() as $single) {
					foreach ($take->result() as $row)
					{
						$idImage=$row->Id;
						$idGame=$single->Id;
						$this->db->where('Id',$idImage);
						$data = array(
							'IdGame'=>$idGame,
							);
						$this->db->update('gamesimage',$data);
					}
				}
			}
		}
	}

	function takeGame($slug=FALSE)
	{
		$take=$this->db->get('games');
		if($slug==FALSE){
			if($take->num_rows()>0)
			{
				foreach ($take->result() as $row) {
					$data[]=$row;
				}
				return $data;
			}
		}

		else
		{
			$query=$this->db->get_where('games',array('Id'=>$slug));
			return $query->row_array();
		}
	}
	
	function update($slug)
	{
		$title=$this->input->post('title');
		$date=$this->input->post('date');
		$desc=$this->input->post('desc');
		$avail=$this->input->post('avail');
		$data = array(
			'Title'=>$title,
			'Description'=>$desc,
			'ReleaseDate'=>$date,
			'AvailableOn'=>$avail,
			);
		$this->db->where('Id',$slug);
		$this->db->update('games',$data);

		$game=$this->db->where('Title',$title);
		$game=$this->db->get('games');
		
		$take=$this->db->where('IdGame',0);
		$take=$this->db->get('gamesImage');
		
		if($game->num_rows()>0)
		{
			if($take->num_rows()>0)
			{
				foreach ($game -> result() as $single) {
					foreach ($take->result() as $row)
					{
						$idImage=$row->Id;
						$idGame=$single->Id;
						$this->db->where('Id',$idImage);
						$data = array(
							'IdGame'=>$idGame,
							);
						$this->db->update('gamesimage',$data);
					}
				}
			}
		}
	}

	function select($slug)
	{
		return $this->db->get_where('games',array('Id'=>$slug))->row();
	}

}
?>