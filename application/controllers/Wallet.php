<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('WalletModel');
    }

    public function index() {
        // Check if user is logged in
        if (!$this->session->userdata('id')) {
            // Redirect to login page or handle unauthorized access
            redirect('Welcome/index');
        }
        
        // Retrieve user ID from session
        $user_id = $this->session->userdata('id');
        
        // Get wallet balance for the logged-in user
        $wallet = $this->WalletModel->getWalletByUserId($user_id);
        
        // Pass wallet data to the view
        $data['wallet'] = $wallet;
        
        // Load the view
        $this->load->view('wallet_view', $data);
    }

    public function deposit() {
        // Check if user is logged in
        if (!$this->session->userdata('id')) {
            // Redirect to login page or handle unauthorized access
            redirect('Welcome/index');
        }

        // Retrieve user ID from session
        $user_id = $this->session->userdata('id');

        // Get the amount to deposit from the form
        $amount = $this->input->post('amount');

        // Update wallet balance
        $this->WalletModel->updateBalance($user_id, $amount);

        // Redirect back to wallet page
        redirect('wallet');
    }

    public function invest($planId) {
        // Check if user is logged in
        if (!$this->session->userdata('id')) {
            // Return error response
            echo json_encode(array('success' => false, 'message' => 'User not logged in'));
            return;
        }

        // Retrieve user ID and plan ID from POST data
        $user_id = $this->session->userdata('id');
        $plan_id = $planId;
        $this->load->model('PlanModel');
        $planData = $this->PlanModel->getPlanById($plan_id);
        $this->load->model('WalletModel');
        $walData=$this->WalletModel->getWalletByUserId($user_id);
        $this->load->model('PlanModel');
        $data = $this->PlanModel->finalInvest($planData,$walData);
        if ($data) {
            $newWalletBalance = $walData-$planD
        }
        

        }
    }







    