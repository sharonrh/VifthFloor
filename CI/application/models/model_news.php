<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_news extends CI_Model
{
	
	function takeNews($slug=FALSE)
	{
		$query = $this->db->query("SELECT * FROM news ORDER BY PublishedDate DESC LIMIT 4;");
		
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

		$config['upload_path'] = '././assets/uploads/newsThumbnail';
 		$config['allowed_types'] = 'gif|jpg|png';
	  	$config['max_size'] = '100000';
	    $config['max_width'] = '2000';
		$config['max_height'] = '2000';

	  	$this->load->library('upload', $config);

	  	$this->upload->initialize($config); 
		$this->upload->do_upload('thumbnail');
		$upload_data = $this->upload->data();
	  	$thumb=$upload_data['file_name'];

		$data = array(
			'Title'=>$title,
			'PublishedDate'=>$date,
			'Content'=>$content,
			'CreatorId'=>$creator,
			'Thumbnail'=>$thumb
			);
		$this->db->insert('news',$data);
	}
	
	function update($slug)
	{
		$title=$this->input->post('title');
		$content=$this->input->post('content');
		$modDate=date("Y/m/d");
		$creator=1;

		$config['upload_path'] = '././assets/uploads/newsThumbnail';
 		$config['allowed_types'] = 'gif|jpg|png';
	  	$config['max_size'] = '100000';
	    $config['max_width'] = '2000';
		$config['max_height'] = '2000';

	  	$this->load->library('upload', $config);

	  	$this->upload->initialize($config); 
		$this->upload->do_upload('thumbnail');
		$upload_data = $this->upload->data();
	  	$thumb=$upload_data['file_name'];

		$data = array(
			'Title'=>$title,
			'Content'=>$content,
			'CreatorId'=>$creator,
			'ModifiedDate'=>$modDate,
			'Thumbnail'=>$thumb
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