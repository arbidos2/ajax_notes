<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Note extends CI_Controller {

	public function get_notes()
	{
		$query = "SELECT * FROM notes";
		return $this->db->query($query)->result_array();
	}
}

//end of main controller