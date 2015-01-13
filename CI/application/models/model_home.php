<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_home extends CI_Model
{
	function construct()
	{
		parent:: construct();
	}

	function takeNews()
	{
		$query = $this->db->query("SELECT * FROM news ORDER BY PublishedDate DESC LIMIT 4;");
		return $query->result();
	}

	function takeSlide()
	{
		$query = $this->db->query("SELECT * FROM gamesImage;");
		return $query->result();
	}
}
?>