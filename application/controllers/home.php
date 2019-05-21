<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('v_home');
		$this->load->view('templates/footer');
	}
}
