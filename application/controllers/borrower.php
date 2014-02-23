<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Borrower extends CI_Controller{
	public function Borrower(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
		$this->load->helper('form');
	}

	public function index(){
		$data["title"] = "Home - ICS Library System";
		$this->load->view("borrower_main_view", $data);
	}

	public function view_borrower_profile_index(){
		$data["title"] = "Profile - ICS Library System";

		$username = $this->session->userdata('username'); // get username from session
		$id = $this->session->userdata('id'); //get user id from session

		$data['query_user'] = $this->user_model->user_profile($username, $id); //query for user table
		
		$data['save_message'] = "";
		$data['username_exist'] = "";
		$this->load->view("borrower_profile_view", $data);
	}

	public function save(){
			$username = $this->session->userdata('username');
			$id = $this->session->userdata('id');
			$user_type = $this->session->userdata('user_type');

			if(isset($_POST['submit'])){ //if submit is clicked 
				if($_POST["password"]!="") //if password was changed
					$password=md5($_POST["password"]);
				else { //if password is the same as before
					$query = $this->user_model->user_profile($username, $id);
					//foreach($query as $row){
						$password = $query->password;
					//}
				}

				if($this->user_model->username_exists($_POST["username"])){
					$username = $this->session->userdata('username'); //get username from session
					$data['username_exist'] = "Username already exist!";
				}else{
					$username =$_POST["username"];
					$data['username_exist'] = "";
				}	

				$college_address=$_POST["college_address"];
				$contact_number=$_POST["contact_number"];
			}
			
			//update user profile
			$this->user_model->user_update_profile($id, $username, $password, $college_address, $contact_number);
			$data["title"] = "Profile - ICS Library System";
			
			//reset user data on session
			$sessionData = array('loggedIn' => TRUE, 'id' => $id, 'user_type' => $user_type, 'username' => $username); 
			$this->session->set_userdata($sessionData);
			
			//user query read from database again
			$data['query_user'] = $this->user_model->user_profile($username, $id); 
			
			$data['save_message'] = "Update Saved!";//save message
			$this->load->view("borrower_profile_view", $data);
		}

		public function change_profile_picture(){
			$this->load->library('upload');
			$username = $this->session->userdata('username');
			$this->user_model->upload_picture($username);

			redirect('borrower/view_borrower_profile_index');
		}
}

?>