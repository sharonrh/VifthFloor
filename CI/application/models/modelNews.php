<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class modelNews extends CI_Model
{
	
	function takeNews($slug=FALSE)
	{
		$take=$this->db->get('news');
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
			$query=$this->db->get_where('news',array('Id'=>$slug));
			return $query->row_array();
		}
	}

	function takeSome($per_page, $page_id)
	{	
		$take=$this->db->get('news', $per_page, $page_id);

		return $take->result();
	}

	function addNew()
	{
		$title=$this->input->post('title');
		$date=date("Y/m/d");
		$content=$this->input->post('content');
		$creator=1;
		$data = array(
			'Title'=>$title,
			'PublishedDate'=>$date,
			'Content'=>$content,
			'CreatorId'=>$creator,
			);
		$this->db->insert('news',$data);
	}
	
	function update($slug)
	{
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$modDate=date("Y/m/d");
		$creator=1;
		$data = array(
			'Title'=>$title,
			'Content'=>$content,
			'CreatorId'=>$creator,
			'ModifiedDate'=>$modDate
			);
		$this->db->where('Id',$slug);
		$this->db->update('news',$data);
	}

	function select($slug)
	{
		return $this->db->get_where('news',array('Id'=>$slug))->row();
	}

	function fillDropCategory()
	{
		$take=$this->db->get('category');
		if($take->num_rows()>0)
		{
			foreach ($take->result() as $row) 
			{
				$data[$row->CategoryId]=$row->CategoryName;
			}
			return $data;
		}
	}
}
?>