<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->model('Note');
		$data['notes'] = $this->Note->get_notes();
		$this->load->view('notes/index', $data);
	}

	public function create()
	{
		var_dump($this->input->post());
		die();
	}
}

//end of main controller