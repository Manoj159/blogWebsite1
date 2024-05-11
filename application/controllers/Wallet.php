<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wallet extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('WalletModel');
        $this->load->model('PlanModel');
    }

    public function index() {
        if (!$this->session->userdata('id')) {
            redirect('Welcome/index');
        }

        $user_id = $this->session->userdata('id');
        $data['wallet'] = $this->WalletModel->getWalletByUserId($user_id);
        $this->load->view('wallet_view', $data);
    }

    public function deposit() {
        if (!$this->session->userdata('id')) {
            redirect('Welcome/index');
        }

        $user_id = $this->session->userdata('id');
        $amount = $this->input->post('amount');
        $this->WalletModel->addMoney($user_id, $amount);
        redirect('wallet');
    }

    public function invest($planId) {
        if (!$this->session->userdata('id')) {
            echo json_encode(array('success' => false, 'message' => 'User not logged in'));
            return;
        }

        $user_id = $this->session->userdata('id');
        $plan_id = $planId;
        $planData = $this->PlanModel->getPlanById($plan_id);
        $walData = $this->WalletModel->getWalletByUserId($user_id);

        if (!$planData || !$walData) {
            echo json_encode(array('success' => false, 'message' => 'Invalid plan or wallet data'));
            return;
        }

        $newWalletBalance = $walData['balance'] - $planData['plan_price'];

        if ($newWalletBalance <=0) {
            echo json_encode(array('success' => false, 'message' => 'Insufficient balance'));
            return;
        }

        if ($this->PlanModel->finalInvest($planData, $walData)) {
            $this->WalletModel->updateBalance($user_id, $newWalletBalance);
            echo json_encode(array('success' => true, 'message' => 'Investment successful'));
        } else {
            echo json_encode(array('success' => false, 'message' => 'Investment failed'));
        }
    }
}
?>
