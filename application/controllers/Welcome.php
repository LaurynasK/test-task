<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public $data;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('file_model');
	}
	
	public function index()
	{
		
		$this->data = $this->file_model->show_page();
		$this->load->view('main', $this->data);
	}
	
	public function page()
	{
		$this->data = $this->file_model->show_page();
		$this->load->view('main', $this->data);
	}
	
	public function search()
	{
		$search_phrase = $this->input->get("search");
		$this->data = $this->file_model->search($search_phrase);
		$this->load->view('main', $this->data);
	}
}
