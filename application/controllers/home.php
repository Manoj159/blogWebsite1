<?php
class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		if ( ! $this->session->userdata('id') ) {
			return redirect('welcome/login');
		}
	}
	function homepage(){
		$this->load->view('home');
	
	}
	function validate(){
    $this->load->library('form_validation');
    $this->load->model('articlemodel');
    
    $user_id = $this->session->userdata('id');

    $new_article = array(
        "a_tittle" => $this->input->post('a_tittle'), 
        "a_desc" => $this->input->post('a_desc'), 
        "user_id" => $user_id
    );

    
    $this->articlemodel->addart($new_article); 
    return redirect('home/myarticles');
	}

	function signout(){
    $this->session->unset_userdata('id');
    return redirect('welcome/login');
	}

	public function myarticles()
	{
    $id = $this->session->userdata('id');
    $query = $this->db->query("SELECT * FROM articles WHERE user_id = ?", array($id));
    $data = $query->result_array();
    $this->load->view('allarticle', ['data' => $data]);
	}
	public function deleteArt($articleId){
    $id = $articleId;
    $this->db->where('id', $id);
    $this->db->delete('articles');
    redirect('home/myarticles');
}
public function invest(){
    $pquery = $this->db->query("SELECT * FROM plans ");
    $pdata = $pquery->result_array();
    $this->load->view('ihome', ['pldata' => $pdata]);
}
public function admin(){
	$this->load->view('adminView');
}
public function newPlan(){
    // Retrieve individual form fields
    $plan_name = $this->input->post('plan_name');
    $plan_price = $this->input->post('plan_price');
    $plan_duration = $this->input->post('plan_duration');

    // Handle file upload
    $image_data = file_get_contents($_FILES['image']['tmp_name']);

    // Insert the image data into the database
    $data = array(
        'plan_name' => $plan_name,
        'plan_price' => $plan_price,
        'plan_duration' => $plan_duration,
        'image' => $image_data // Store image data as blob
    );

    // Assuming you have a model called PlanModel with a method to insert data
    $this->load->model('PlanModel');
    $this->PlanModel->insertPlan($data);

    // Now you have all the form field data and uploaded file data
    // You can process this data further as per your application's requirements
}
 
 public function wallet(){
 	$this->load->view('wallet_view');
 }
}
?>