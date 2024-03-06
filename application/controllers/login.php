<?php 
class login extends CI_Controller{
	public function validate(){
		$this->load->library('Form_validation');
		$this->form_validation->set_rules('fname','Name','required');
		$this->form_validation->set_rules('otp','OTP','required|min_length[4]');
		$this->form_validation->set_rules('mnumber','Phone Number','required|max_length[10]|min_length[10]|is_unique[users.mnumber]');
		$this->form_validation->set_rules('pwd','Password','required|min_length[6]');
		if ($this->form_validation->run()) {
			$post=$this->input->post();
			$this->load->model('loginmodel');
			if (!$this->loginmodel->register($post)) {
				$this->load->view('login');
			}else echo "something went wrong";
		}
		else $this->load->view('register');
	}
	public function loginvalidate(){
		$this->load->library('Form_validation');
		$this->form_validation->set_rules('mnumber','Phone Number','required|max_length[10]|min_length[10]');
		$this->form_validation->set_rules('pwd','Password','required|min_length[6]');
		if ($this->form_validation->run()) {
			$mnumber=$this->input->post('mnumber');
			$pwd=$this->input->post('pwd');
			$this->load->model('loginmodel');
			if ($uid=$this->loginmodel->loginuser($mnumber,$pwd)) {
				$this->session->set_userdata('id',$uid);
				return redirect('home/homepage');
			}else echo "something went wrong";
		}else $this->load->view('login');
	}
}
?>