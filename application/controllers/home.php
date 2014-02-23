<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{
	public function Home(){
		parent::__construct();
		$this->load->helper('form');
		
	}

	public function index(){
		$data["title"] = "Home - ICS Library System";
		$this->load->view("home_view", $data);
		//$this->load->view("search_view", $data);
	}

	
}

?>